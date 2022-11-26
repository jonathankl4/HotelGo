<?php

use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('landingpage');
});

Route::get("/logout", function(){
    return view("/login");
});

//Bagian register
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [registerController::class, "registerAction"]);

//Bagian login
Route::get('/login', function () {
    return view('login');
});
Route::post('/loginuser',[loginController::class, "loginAction"]);

Route::get('/user', function () {
    return view('user.homeuser');
});


Route::prefix("/admin")->group(function (){

    Route::get("/", function(){
        return view("admin.dashboard");
        // return view("admin.HMasterKamar");
    });
    Route::get("/MasterKamar", [KamarController::class, "MasterKamar"]);

    Route::get("/HtambahKamar", function(){
        return view("admin.HtambahKamar");
    });
    Route::post("/tambahkamar",[KamarController::class, "tambahkamar"]);
    Route::get("/detailkamar/{id}", [KamarController::class, "DetailKamar"]);

    Route::get("/MasterFasilitas", [FasilitasHotelController::class, "MasterFasilitas"]);
    Route::get("/Htambahfasilitas", function(){
        return view("admin.HTambahFasilitas");
    });
    Route::post("/tambahfasilitas", [FasilitasHotelController::class, "tambahfasilitas"]);
    Route::get("/deletefasilitas/{id}", [FasilitasHotelController::class, "deletefasilitas"]);

    Route::get("/MasterUser", [UserController::class, "MasterUser"]);
});
