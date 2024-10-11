@extends('layouts.app')
@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hai<span> <strong>{{Auth::user()->name}}</strong> <span>  lihat data catatn anda sekarang</h4>
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
        <div class="p-2 mt-2 me-2">
            <p class="mb-2"> <a href="/createcatatan" class="btn btn-primary float-right">Tambah Catatan</a></p>
            <p>Daftar Catatan</p>
        <table class="table table-bordered border-primary ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>tanggal dibuat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catatan as $no=> $catat )
                    <tr>
                        <td>{{$no +1}}</td>
                        <td>{{$catat->judul}}</td>
                        <td>{{$catat->deskripsi}}</td>
                        <td>{{$catat->tanggal_dibuat}}</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-danger">hapus</a>
                            <a href="/isi" class="btn btn-primary">detail</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            </div>
        </table>
        </div>
    </div>

@endsection
