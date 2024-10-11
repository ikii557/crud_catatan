<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatatanController;

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

Route::middleware(['guest'])->group(function () {
    // register
    Route::get("/register", [AuthController::class,'register'] );
    Route::post('pages.extra.register', [AuthController::class,'storeregister'] );
    //login
    Route::get("/login", [AuthController::class,'login'] )->name('login');
    Route::post('pages.extra.login', [AuthController::class,'storelogin'] );

});

Route::get('/', function () {
    return view ('pages.dasboard.index');
});
Route::middleware(['auth'])->group(function(){
    // profill
    Route::get('/profile', [UserController::class,'profile'] );
    Route::get('/logout', function () {
        return view ('pages.extra.logout');
    });
    // catatan controller
    Route::get('/catatan', [CatatanController::class,'index']);
    Route::get('/createcatatan', function () {
        return view ('pages.catatan.createcatatan');
    });
    Route::get('/isi', function () {
        return view ('pages.catatan.isi');
    });
});
