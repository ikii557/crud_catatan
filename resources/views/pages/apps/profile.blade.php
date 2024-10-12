@extends('layouts.app')
@section('content')

            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, Selamat Datang <span>{{Auth::user()->name}}<span></h4>
                            <p class="mb-0">Didalam profile kami</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dasboard</a></li>
                            <li class="breadcrumb-item active"><a href="/catatan">Catatan</a></li>
                            <li class="breadcrumb-item "><a href="/editprofile">Edit Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card white">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="user.png" class="img-fluid rounded-circle" alt="user">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary">{{Auth::user()->name}}</h4>
                                                        <p>UX / UI / FE Designer</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary">{{Auth::user()->email}}</h4>
                                                        <p>UX / UI / FE Designer</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-primary">(+62) 831-3400-0194</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="card">
                        <p class="p-2">daftar catatan {{Auth::user()->name}}</p>
                        <div class="p-2 me-2">
                        <table class="table  table-bordered ">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama</th>
                                    <th>judul</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $no=> $catat )
                                <tr>
                                    <td>{{$no +1}}</td>
                                    <td>{{$catat->name}}</td>
                                    <td>{{$catat->judul}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        </div>
                    </div>
            </div>
@endsection
