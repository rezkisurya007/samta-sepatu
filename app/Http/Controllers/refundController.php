<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\refund;
use App\Http\Controllers\Controller;
use Auth;

class refundController extends Controller
{
    public function index(){
        // $refunds = refund::where('user_id',Auth::user()->id)->get();
        $refunds = refund::all();
        return view('admin.refund')->with('refunds',$refunds);
    }
    public function refund(Request $request){
    $fileextension = $request->file('img')->getClientOriginalExtension();
        $filename = time().".". $fileextension;
        $request->file('img')->storeAs('public',$filename); 
    

        $refunds = new refund;

        $refunds->user_id = Auth::user()->id;
        $refunds->name_user = Auth::user()->name;
        $refunds->Permasalahan = $request->input('Permasalahan');
        $refunds->tanggal = $request->input('tanggal');
        $refunds->kode = $request->input('kode');
        $refunds->name_gambar = $filename;
        $refunds->status = "pending";
       

       
        $message ='3. '. $refunds->name_user.' telah melakukan refund barang %0Adengan permasalahan '. $refunds->Permasalahan .'%0Apada tanggal pembelian '.$refunds->tanggal .'%0Adengan kode barang '.$refunds->kode;
        $url="https://api.telegram.org/bot1738294890:AAF2KuJID3efe1wTwnKl_Fk5Wf_VkgN518Q/sendMessage?chat_id=-323635813&parse_mode=HTML&text=".$message;
            
        $curl = curl_init($url);

     		curl_exec($curl);

            curl_close($curl);
        $refunds->save();

        alert()->success('User Sukses diupdate', 'Success');
        return redirect('/refundbarang');
    }
    public function verifikasiterima($id){
        // $refunds = refund::where('user_id',Auth::user()->id)->get();
        $refunds = refund::find($id);
        $refunds -> status = "disetujui";
        $refunds -> save();
        return redirect('/refund');
    }
    public function verifikasitolak($id){
        // $refunds = refund::where('user_id',Auth::user()->id)->get();
        $refunds = refund::find($id);
        $refunds -> status = "ditolak";
        $refunds -> save();
        return redirect('/refund');
    }
    public function view(){
        $refunds = refund::where('user_id',Auth::user()->id)->get();
       
        return view('refundbarang')->with('refunds',$refunds);
    }
}
