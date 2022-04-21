<?php

namespace App\Http\Controllers;
use App\bukti;
use App\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class buktiController extends Controller
{
    public function index(){
        $buktis = bukti::all();
        return view('admin.bukti')->with('buktis',$buktis);
    }
  
    
    public function upload(Request $request)
    {
        
        $fileextension = $request->file('img')->getClientOriginalExtension();
        $filename = time().".". $fileextension;
        $request->file('img')->storeAs('public',$filename); 
    
        pesanan::where('id',$request->pesanan_id)->update(['status'=>2]) ;
        $buktis = new bukti;

        $buktis->user_id = Auth::user()->id;
        $buktis->name_user = Auth::user()->name;
        $buktis->pesanan_id = $request->input('pesanan_id');
        $buktis->kode = $request->input('kode');
        $buktis->name_gambar = $filename;

        $message ='2. '. $buktis->name_user.' telah melakukan upload bukti pembayaran dengan kode barang '. $buktis->kode ;
        $url="https://api.telegram.org/bot1738294890:AAF2KuJID3efe1wTwnKl_Fk5Wf_VkgN518Q/sendMessage?chat_id=-323635813&parse_mode=HTML&text=".$message;
            
        $curl = curl_init($url);

     		curl_exec($curl);

            curl_close($curl);
       
        $buktis->save();
        alert()->success('User Sukses diupdate', 'Success');
        return redirect('/form/'.$request->pesanan_id);
        
    }
    Public function view($id){
        $buktis = bukti::where('user_id',Auth::user()->id)->get();
       $pesanan = pesanan::find ($id) ;
        return view('form')->with(['buktis'=>$buktis,'pesanan'=>$pesanan]);
    }
}
