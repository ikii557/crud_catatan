<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    //
    public function index(Request $request){
        $catatan = Catatan::all();
        return view("pages.catatan.index",compact("catatan"));
    }
}
