@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="p-2 mt-2 me-2">

        <p>Daftar catatan <img src="" alt="user"></p>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Isi catatan</th>
                    <th>tanggal dibuat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>rifki</td>
                    <td>ceritaku</td>
                    <td>mengisahkan keseharian nya</td>
                    <td>pada hari senin</td>
                    <td>12-12-2023</td>
                    <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

@endsection
