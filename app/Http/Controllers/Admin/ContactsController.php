<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
        {
            $contactus = \App\Contacts::all();
        return view ('admin.contactus')
            ->with('contactus', $contactus);
        }

    // {
    //     return view('\admin.contactus');
    // }

    public function edit($id){
       $contactus = \App\Contacts::findOrFail($id);
        return view('admin\contacts\edit')
        ->with('contactus',$contactus);

    }

    public function submit(Request $request, $id){

        $contactus = \App\Contacts::findOrFail($id);
        $contactus->title = $request->input('title');
        $contactus->subtitle = $request->input('subtitle');
        $contactus->description = $request->input('description');
        $contactus->update(); 

        return redirect('contactus')->with('status','Data contact Tergantikan');
    }

    public function delete($id){

        $contactus = \App\Contacts::findOrFail($id);
        $contactus->delete();

        return redirect('contactus')->with('status','Data contact terhapus ');

    }

}

