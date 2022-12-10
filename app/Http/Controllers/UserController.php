<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function MasterUser(){

        $data = DB::table("users")->get();

        return view("admin.HMasterUser",["data"=> $data]);
    }

    public function riwayatpesanan(){


        return view("user.pesanan");
    }

}
