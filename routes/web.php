<?php

use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view("/landingpage");
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
    // dd("anjay ggbet");

    // dd(Session::get("userLog"));
    $data = DB::table('kamar')->get();
    $termurah = DB::table('kamar')->select(DB::raw('MIN(harga_kamar) as ht'))->first();

    // dd($termurah);
    return view("user.dashboard", ["kamar"=>$data ,"termurah"=>$termurah]);

    // $users = DB::table('users')
    //          ->select(DB::raw('count(*) as user_count, status'))
    //          ->where('status', '<>', 1)
    //          ->groupBy('status')
    //          ->get();
});

Route::post('/pesan',[PesanController::class, "pilihkamar"]);
Route::post("/pembayaran",[PesanController::class, "pembayaran"]);
Route::post("/bayar", [PesanController::class, "bayar"]);
Route::get("/riwayattransaksi",[UserController::class,"riwayatpesanan"]);


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
