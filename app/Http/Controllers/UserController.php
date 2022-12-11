<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //

    public function MasterUser(){

        $data = DB::table("users")->get();

        return view("admin.HMasterUser",["data"=> $data]);
    }

    public function profile(){
        $user = Session::get('userLog');
        $db = DB::table('users')->where('email','=',$user->email)->first();
        return view("user.profile",["data"=>$db]);
    }

    public function editProfile(Request $req){
        $user = Session::get('userLog');
        $name = $req->editName;
        $oldPass = $req->oldPass;
        $newPass = $req->newPass;
        $cpass = $req->cPass;

        
        //cek old pass
        $cekOld = DB::table('users')->where('password','=', $oldPass)->first();

        if($name == ""){
            Alert::warning('error', 'Nama tidak boleh kosong');
        }else{
            if($cekOld != null){
                if($newPass == $cpass){
                    // $db = User::find($user->id);
                    // $db->name = $name;
                    // $db->password = $newPass;
                    // $db->save();

                    DB::table('users')
                        ->where('id', $user->id)
                        ->update(['name' => $name]);

                    DB::table('users')
                        ->where('id', $user->id)
                        ->update(['password' => $newPass]);
                    
                    Alert::success('Berhasil', 'Berhasil mengedit profile');
                    return redirect('/profile');
                }else{
                    Alert::warning('Error','New password tidak sama dengan konfirmasi password'); 
                    return redirect('/profile');
                }
            }else{
                Alert::warning('Error','old password tidak sesuai'); 
                return redirect('/profile');
            }
        }
    }

    public function riwayatpesanan(){

        $userLog = Session::get("userLog");
        $data = DB::select("SELECT ht.id as orderid, ht.nama_pemesan as namapemesan , k.nama_kamar as namakamar ,ht.checkin as checkin , ht.checkout as checkout , ht.total as total  FROM h_trans ht join kamar k on ht.idkamar = k.id where ht.iduser = $userLog->id and ht.status_trans='pending' ");
        $j = "";
        if (count($data)> 0) {
            # code...
            $j = DB::table("d_trans")->where("idhtrans", '=', $data[0]->orderid)->get();
        }
        // dd($j);




        return view("user.pesanan",["data"=>$data, "jumlah"=>$j]);
    }

}
