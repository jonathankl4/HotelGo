<?php

use App\Http\Controllers\AdminController;
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

// BAGIAN USER
// =====================================================================================

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

//tampil profile
Route::get("/profile", [UserController::class, "profile"]);

//masuk halaman detail pemesanan
Route::post('/pesan',[PesanController::class, "pilihkamar"]);

//masuk halaman pembayaran
Route::post("/pembayaran",[PesanController::class, "pembayaran"]);
//bayar
Route::post("/bayar", [PesanController::class, "bayar"]);

//riwayat transaksi / pesanan user
Route::get("/riwayattransaksi",[UserController::class,"riwayatpesanan"]);


//================================================================================
//akhir bagian user



Route::prefix("/admin")->group(function (){
    //masuk dashboard admin
    Route::get("/", function(){

        $dk = DB::table("no_kamar")->where("status_kamar",'=','terisi')->get();
        $du = DB::table("users")->where("role",'=','1')->get();
        $dp = DB::table("h_trans")->where("status_trans",'=','pending')->get();
        return view("admin.dashboard",["kamarterisi" => $dk,"jumlahuser"=>$du,"jumlahtrans"=>$dp]);
        // return view("admin.HMasterKamar");
    });
    //masuk halaman master kamar
    Route::get("/MasterKamar", [KamarController::class, "MasterKamar"]);


    // masuk halaman tambah kamar
    Route::get("/HtambahKamar", function(){
        return view("admin.HtambahKamar");
    });
    // tambah kamar
    Route::post("/tambahkamar",[KamarController::class, "tambahkamar"]);
    //masuk detail kamar
    Route::get("/detailkamar/{id}", [KamarController::class, "DetailKamar"]);
    // masuk halaman master fasilitas
    Route::get("/MasterFasilitas", [FasilitasHotelController::class, "MasterFasilitas"]);
    //masuk halaman tambah fasilitas
    Route::get("/Htambahfasilitas", function(){
        return view("admin.HTambahFasilitas");
    });
    //tambah fasilitas
    Route::post("/tambahfasilitas", [FasilitasHotelController::class, "tambahfasilitas"]);

    Route::get("/deletefasilitas/{id}", [FasilitasHotelController::class, "deletefasilitas"]);

    Route::get("/MasterUser", [UserController::class, "MasterUser"]);

    //masuk halaman pesanan di admin
    Route::get("pesanan",[AdminController::class, "pesanan"]);

    Route::get("selesaikanpesanan/{id}",[AdminController::class, "selesaikanpesanan"]);

    // laporan
    Route::get("/laporanpendapatan",[AdminController::class , "laporanpendapatan"]);
    Route::get("/Flaporanpendapatan",[AdminController::class , "Flaporanpendapatan"]);

});
