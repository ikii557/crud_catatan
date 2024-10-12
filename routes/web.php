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
    Route::post('/store/register', [AuthController::class,'storeregister'] );
    //login
    Route::get("/login", [AuthController::class,'login'] )->name('login');
    Route::post('/store/login', [AuthController::class,'storelogin'] );

});






Route::middleware(['auth'])->group(function(){
Route::get('/', function () {
    return view ('pages.dasboard.index');
});
// profill
Route::get('/profile', [UserController::class,'profile'] );
Route::get('/editprofile',function(){
    return view ('pages.apps.editprofile');
});
Route::get('/logout', [AuthController::class,'logout'] );
// catatan controller
Route::get('/createcatatan', [CatatanController::class,'create'] );
Route::post('/store', [CatatanController::class,'store'] );
Route::get('/isi', function () {
    return view ('pages.catatan.isi');
});
Route::get('/catatan', [CatatanController::class,'index']);




});
