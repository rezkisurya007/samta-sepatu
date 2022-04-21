<?php

namespace App\Http\Controllers;
use App\Barang;  
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index ($id)
    {
        $barang = Barang::where('id', $id)->first();

    	return view('pesan.index', compact('barang'));
    }
    public function pesan(Request $request, $id)
    {	
    	$barang = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        if($request->jumlah_pesan > $barang->stok)
        {
            return redirect ('pesan/'.$id);
        }

        $cek_pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();

        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id =Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->kirim = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100,999);
            $pesanan->terima ="belum diterima";
            $pesanan->save();
        }
    
 
        $pesanan_baru = Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();

        $cek_pesanan_detail = PesananDetail::where('barang_id',$barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->barang_id = $barang->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        }else
        {
            $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;
            
            $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
        }
     
        $pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
        $pesanan->update(); 

        alert()->success('Pesanan Sukses Masuk Keranjang', 'Success');
        return redirect('check-out');



    
}
  
public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 	$pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();

        alert()->error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }
    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        } 

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        $listbarang = "";
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $listbarang .= "%0A".$barang->nama_barang." jumlah barang ".$pesanan_detail->jumlah;
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        $namauser = Auth::user()->name;
        $message ='1. '. $namauser.' telah memesan barang '.$listbarang ."%0Apada tanggal ". $pesanan->tanggal ." dengan total pembelian Rp ".$pesanan->jumlah_harga ;
        $url="https://api.telegram.org/bot1738294890:AAF2KuJID3efe1wTwnKl_Fk5Wf_VkgN518Q/sendMessage?chat_id=-323635813&parse_mode=HTML&text=".$message;
            
        $curl = curl_init($url);

     		curl_exec($curl);

            curl_close($curl);

        alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    } 
}