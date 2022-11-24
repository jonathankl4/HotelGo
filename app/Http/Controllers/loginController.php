<?php

namespace App\Http\Controllers;

use App\Rules\cekLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function loginAction(Request $req){
        if($req->validate
        (
            [
                'email' => ['required', new cekLogin($req ->password)],
                'password' => ['required'],
            ],
            [
                'email.required' => 'email tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong',
            ]
        )) {
            // proses simpan ke cookie disini
            $email = $req->email;
            $pass = $req->password;

            // login untuk admin
            $user = DB::table("users")->where("email",'=',$email)->first();

            // role 0 = admin
            // role 1 = user biasa
            if ($user->role == 0) {
                # code...
                return redirect('/admin')->with('msg', 'Berhasil Login sebagai admin');
            }
            else{
                return redirect('/user')->with('msg', 'Berhasil Login sebagai user');
            }


            // if ($req -> remember) {
            //     Session::put('remember', $req->tuser);
            // }
            // else{
            //     Session::forget('remember');
            // }
            return redirect('/login');

        }
    }
}
