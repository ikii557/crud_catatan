@extends('layouts.app')
@section('content')

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="/update" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>UserName</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No Phone</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class=" mb-3">
                                            <span class="" id="basic-addon1">Foto</span>
                                            <input name="foto" value="{{old('foto')}}" type="file" class="form-control" placeholder="masukan foto" aria-label="foto" aria-describedby="basic-addon2">
                                            @error('foto')
                                                <p class="text-danger"></p>
                                            @enderror
                                            <img width="100" src="" alt="">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>



@endsection
