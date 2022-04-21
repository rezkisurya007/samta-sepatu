<?php

namespace App\Http\Controllers\Admin;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function barang(){
        $barangs = Barang::all();
        return view('admin.barang')->with('barangs',$barangs);
    }
    public function store(Request $request)
    {
        
        $barangs = new Barang;

        $barangs->nama_barang = $request->input('namabarang');
        $barangs->gambar = $request->file('gambar')->getClientOriginalName();
        
        $request->file('gambar')->move(public_path('/uploads'), $barangs->gambar);
        $barangs->harga = $request->input('harga');
        $barangs->stok = $request->input('stok');
        $barangs->keterangan = $request->input('keterangan');
        $barangs->save();
        return redirect('/barang')->with('success','data telah ditambahkan');
    }
    
    public function edit(Request $request, $id){
        $barangs = Barang::findOrFail($id);
         return view('admin.barangedit')->with('barangs',$barangs);
    
     }
 public function submit(Request $request, $id){
     $barangs = Barang::find($id);
     $barangs->nama_barang = $request->input('namabarang');
     $barangs->gambar = $request->input('gambar');
     
     $barangs->harga = $request->input('harga');
     $barangs->stok = $request->input('stok');
     $barangs->keterangan = $request->input('keterangan');
     $barangs->update();
 
     return redirect('/barang')->with('status','Your data is Updated');
 }
    public function delete($id){
        $barangs = Barang::findOrFail($id);
        $barangs->delete();

        return redirect('/barang')->with('status','Your data is Deleted');
    }
  
}
