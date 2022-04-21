<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayanansController extends Controller
{
    public function index()
        {
            $layananus = \App\Layanans::all();
        return view ('admin.layananus')
            ->with('layananus', $layananus);
        }

    // {
    //     return view('\a

    public function edit($id){
       $layananus = \App\Layanans::findOrFail($id);
        return view('admin\layanans\edit')
        ->with('layananus',$layananus);

    }

    public function submit(Request $request, $id){

        $layananus = \App\Layanans::findOrFail($id);
        $layananus->title = $request->input('title');
        $layananus->subtitle = $request->input('subtitle');
        $layananus->description = $request->input('description');
        $layananus->update(); 

        return redirect('layananus')->with('status','Data layanan Tergantikan');
    }

    public function delete($id){

        $layananus = \App\Layanans::findOrFail($id);
        $layananus->delete();

        return redirect('layananus')->with('status','Data layanan terhapus ');

    }

}

