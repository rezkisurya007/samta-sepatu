<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandasController extends Controller
{
    public function index()
        {
            $berandaus = \App\Berandas::all();
        return view ('admin.berandaus')
            ->with('berandaus', $berandaus);
        }

    // {
    //     return view('\a

    public function edit($id){
       $berandaus = \App\Berandas::findOrFail($id);
        return view('admin\berandas\edit')
        ->with('berandaus',$berandaus);

    }

    public function submit(Request $request, $id){

        $berandaus = \App\Berandas::findOrFail($id);
        $berandaus->title = $request->input('title');
        $berandaus->subtitle = $request->input('subtitle');
        $berandaus->description = $request->input('description');
        $berandaus->update(); 

        return redirect('berandaus')->with('status','Data beranda Tergantikan');
    }

    public function delete($id){

        $berandaus = \App\Berandas::findOrFail($id);
        $berandaus->delete();

        return redirect('berandaus')->with('status','Data beranda terhapus ');

    }

}

