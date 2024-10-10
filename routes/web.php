<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function () {
    return view ('pages.extra.register');
});

Route::get('/login', function () {
    return view ('pages.extra.login');
});

Route::get('/logout', function () {
    return view ('pages.extra.logout');
});

Route::get('/', function () {
    return view ('pages.dasboard.index');
});

Route::get('/catatan', function () {
    return view ('pages.catatan.index');
});

Route::get('/profile', function () {
    return view ('pages.apps.profile');
});
