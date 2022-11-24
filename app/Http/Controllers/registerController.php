<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class registerController extends Controller
{
    public function registerAction(Request $req){
        // if ($req->validate(
        //     [

        //     ],
        //     [

        //     ]
        // )) {
        //     # code...
        // }

        $nama = $req -> name;
        $email = $req -> email;
        $password = $req -> password;
        $cpass = $req -> re_password;

        // DB::insert("insert into users(name, email, password, role) values(:nama, :email, :password, :role)",[
        //     "name" => $nama,
        //     "email" => $email,
        //     "password" => $password,
        //     "role" => "1"
        // ]);
            try {
                //code...
                $new = new User();
                $new->name = $nama;
                $new->email = $email;
                $new->password = $password;
                $new->role = "1";
                $new->save();

                Alert::success("Berhasil", "Berhasil Register");
                return redirect('/login');
            } catch (\Throwable $th) {
                //throw $th;

                Alert::warning("Warning", "Email sudah terpakai");
                return redirect('/register');
            }
    }
}
