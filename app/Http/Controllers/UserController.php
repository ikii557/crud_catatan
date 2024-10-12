<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(Request $request){
        $users = User::where('name',Auth::user()->id)->get();
        return view("pages.apps.profile",compact("users"));
    }
    public function edit($id){
        $dataUsers=User::findOrFail($id);
        return view("pages.apps.editprofile",compact("dataUser"));
    }
    public function update(Request $request, $id){
        $request->validate([
            "name"=> "required",
            "email"=> "required",
            "password"=> bcrypt("required"),
        ]);
        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));

        if  (   $request->hasFile('foto')){
            $path =$request-file('foto')->store('profile');
            $users->foto = $path;
        }
        $users->save() ;
        return redirect()->route('/profile')->with('success','berhasil');

    }
    public function profile(){
        $users = User::where('name',Auth::user()->id)->get();
        return  view('pages.apps.profile',compact('users'));
    }

}
