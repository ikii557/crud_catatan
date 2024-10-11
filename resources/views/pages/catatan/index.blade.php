@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="p-2 mt-2 me-2">

        <p>Daftar catatan <img src="" alt="user"></p>
        <table class="table table-bordered border-primary">
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
