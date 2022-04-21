<?php

namespace App\Http\Controllers\Admin;
use App\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function pesanan(){
        $pesanans = Pesanan::where('status','!=',0)->get();
        return view('admin.pesanan')->with('pesanans',$pesanans);
    }
    public function edit(Request $request, $id){
        $pesanans = Pesanan::findOrFail($id);
         return view('admin.pesananedit')->with('pesanans',$pesanans);
    
     }
     public function submit(Request $request, $id){
        $pesanans = Pesanan::find($id);
        $pesanans->status = $request->input('status');
        $pesanans->kirim = $request->input('kirim');
        $pesanans->update();
   
        return redirect('/pesanan')->with('status','Your data is Updated');
     }
    public function delete($id){
        $pesanans = Pesanan::findOrFail($id);
        $pesanans->delete();

        return redirect('/pesanan')->with('status','Your data is Deleted');
    }
}
