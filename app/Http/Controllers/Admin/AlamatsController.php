<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlamatsController extends Controller
{
    public function index()
        {
            $alamatus = \App\Alamats::all();
        return view ('admin.alamatus')
            ->with('alamatus', $alamatus);
        }

    // {
    //     return view('\a

    public function edit($id){
       $alamatus = \App\Alamats::findOrFail($id);
        return view('admin\alamats\edit')
        ->with('alamatus',$alamatus);

    }

    public function submit(Request $request, $id){

        $alamatus = \App\Alamats::findOrFail($id);
        $alamatus->title = $request->input('title');
        $alamatus->subtitle = $request->input('subtitle');
        $alamatus->description = $request->input('description');
        $alamatus->update(); 

        return redirect('alamatus')->with('status','Data alamat Tergantikan');
    }

    public function delete($id){

        $alamatus = \App\Alamats::findOrFail($id);
        $alamatus->delete();

        return redirect('alamatus')->with('status','Data alamat terhapus ');

    }

}

