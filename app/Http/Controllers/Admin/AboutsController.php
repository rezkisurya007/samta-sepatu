<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
        {
            $aboutus = \App\Abouts::all();
        return view ('admin.aboutus')
            ->with('aboutus', $aboutus);

        }
    // {
    //     return view('\a

    public function edit($id){
       $aboutus = \App\Abouts::findOrFail($id);
        return view('admin\abouts\edit')
        ->with('aboutus',$aboutus);

    }

    public function submit(Request $request, $id){

        $aboutus = \App\Abouts::findOrFail($id);
        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description = $request->input('description');
        $aboutus->update(); 

        return redirect('aboutus')->with('status','Data potrtofolio Tergantikan');
    }

    public function delete($id){

        $aboutus = \App\Abouts::findOrFail($id);
        $aboutus->delete();

        return redirect('aboutus')->with('status','Data Portoflio terhapus ');

    }

}
