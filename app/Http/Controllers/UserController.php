<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request){
        $users = User::all();
        return view("pages.apps.profile",compact("users"));
    }
    public function create(){
        $users = User::all();
    }




    public function profile(){
        return  view('pages.apps.profile');
    }
}
