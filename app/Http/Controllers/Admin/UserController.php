<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user(){
        $users = User::all();
        return view('admin.user')->with('users',$users);
    }
    public function delete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/user')->with('status','Your data is Deleted');
    }
}
