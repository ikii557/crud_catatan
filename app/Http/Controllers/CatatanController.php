<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatatanController extends Controller
{
    //
    public function index(){

        $catatan = Catatan::where('user_id',Auth::user()->id)->get();
        return view("pages.catatan.index",compact("catatan"));
    }
    public function create(){
        return view ('pages.catatan.createcatatan');
    }
    public function store(Request $request){
        $request->validate([
            'judul'         => 'required',
            'deskripsi'     => 'required',
            'tanggal_dibuat'=> 'required',
            'isi_catatan'   => 'required'
        ],[
            'judul.required'             => 'judul tidak boleh kosong',
            'deskripsi.required'         => 'deskripsi tidak boleh kosong',
            'tanggal_dibuat.required'    => 'tanggal tidak boleh kosong',
            'isi_catatan.required'       => 'isi tidak boleh kosong'
        ]);

        $storeDataCatatan =[
            'user_id'       => $request->user()->id,
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'tanggal_dibuat'=> $request->tanggal_dibuat,
            'isi_catatan'   => $request->isi_catatan,
        ];
        Catatan::create($storeDataCatatan);
        return redirect('/catatan')->with('success','catatan berhasil di tamahkan');
    }


}
