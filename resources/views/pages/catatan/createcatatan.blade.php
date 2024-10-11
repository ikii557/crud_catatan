@extends('layouts.app')
@section('content')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
            <h4>Hai<span> <strong>{{Auth::user()->name}}</strong><span> apa yang anda pikirkan sekarang</h4>
            <p class="mb-0"></p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dasboard</a></li>
            <li class="breadcrumb-item active"><a href="/catatan">Catatan</a></li>
        </ol>
    </div>
</div>

        <div class="card">
            <div>
                <h4 class="text-center mt-4">Isi Catatan Anda Hari Ini</h4>
                <div class="p-2 me-3">
                <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                    <span class="" id="basic-addon1">Judul</span>
                    <input name="judul" value="{{old('judul')}}" type="text" class="form-control" placeholder="masukan Judul" aria-label="judul" aria-describedby="basic-addon1">
                    @error('judul')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class=" mb-3">
                    <span class="" id="basic-addon1">Deskripsi</span>
                    <input name="deskripsi" value="{{old('deskripsi')}}" type="text" class="form-control" placeholder="masukan deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2">
                    @error('deskripsi')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class=" mb-3">
                    <span class="" id="basic-addon1">Tanggal dibuat</span>
                    <input name="tanggal_dibuat" value="{{old('tanggal_dibuat')}}" type="date" class="form-control" placeholder="masukan tanggal_dibuat" aria-label="tanggal_dibuat" aria-describedby="basic-addon3">
                    @error('tanggal_dibuat')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class=" mb-3">
                    <span class="" id="basic-addon1"> Isi Catatan</span>
                    <input name="isi_catatan" value="{{old('isi_catatan')}}" type="text" class="form-control" hight="200px" placeholder="masukan isi_catatan" aria-label="isi_catatan" aria-describedby="basic-addon3">
                    @error('isi_catatan')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>



                    <button type="submit"  class="btn btn-success float-right text-submit mb-3">tambah</button>
                </form>
                </div>
            </div>
        </div>



@endsection
