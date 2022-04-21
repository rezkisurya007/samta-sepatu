<?php

namespace App\Http\Controllers\Admin;
use App\PesananDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailPesananController extends Controller
{
    public function detailpesanan(){
        $pesanan_details = PesananDetail::with('barang')->get();
        // $pesanan_details = PesananDetail::all();
      
        return view('admin.detailpesanan')->with('pesanan_details',$pesanan_details);
    }
    public function delete($id){
        $pesanan_details = PesananDetail::findOrFail($id);
        $pesanan_details->delete();

        return redirect('/detailpesanan')->with('status','Your data is Deleted');
    }
}
