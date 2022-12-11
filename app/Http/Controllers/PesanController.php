<?php

namespace App\Http\Controllers;

use App\Models\DTrans;
use App\Models\HTrans;
use App\Models\noKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use stdClass;

class PesanController extends Controller
{
    //

    public function pilihkamar(Request $req){

        $userlog = Session::get("userLog");
        $d1 = $req->dcheckin;
        $d2 = $req->dcheckout;
        $temp = strtotime($d1) - strtotime($d2);
        $diff = abs(round($temp / 86400));

        if ($d1 == ""|| $d2 == "" || $req->kamar == "" || $req->tamu == "") {
            # code...
            Alert::warning("Info", "isi semua keterangan checkin");
            return redirect()->back();
        }

        $kamar = DB::table('kamar')->where('id','=',$req->btnpilih)->first();

        $nok = DB::table("no_kamar")->where('idkamar', '=', $kamar->id)->where("status_kamar", "=",'kosong')->get();

        $j = intval($req->kamar);
        // dd($j);
        if (count($nok) < $j ) {
            # code...
            Alert::warning("info", "jumlah kamar tersisa ". count($nok));
            return redirect()->back();
        }




        $ttl = ($req->kamar*$kamar->harga_kamar)*$diff;
        $ket = new stdClass();
        $ket->idkamar =$req->btnpilih;
        $ket->jkamar = $req->kamar;
        $ket->dcheckin = $req->dcheckin;
        $ket->dcheckout = $req->dcheckout;
        $ket->hari = $diff;
        $ket->tamu = $req->tamu;
        $ket->total = $ttl;

        Session::put("datapesanan", $ket);
        Session::put("datakamar", $kamar);

        // dd($diff);



        return view("user.pesankamar",["dk"=>$kamar , "detail"=>$ket, "userLog"=>$userlog]);

    }

    public function pembayaran(Request $req){
        // dd($req);

        $dp = Session::get("datapesanan");
        // dd($req->bed);

        $j = intval($dp->jkamar);
        // $bed = "bed";
        $dp->bed = count($req->bed);

        $dt = new stdClass();
        $dt->pemesan = $req->namapemesan;
        $dt->notelp = $req->notelp;
        $dt->email = $req->email;
        $dt->tamu[] = $req->nama;
        $dt->title[] = $req->title;

        // dd($dt);

        Session::put("datatamu", $dt);
        Session::put("datapesanan", $dp);




        return view("user.pembayaran");

    }


    public function bayar(Request $req){

        $user = Session::get("userLog");
        $datapesanan = Session::get("datapesanan");
        $datatamu = Session::get("datatamu");

        $metode = $req->radmetode;

        $ht = new HTrans();
        $ht->iduser = $user->id;
        $ht->idkamar = $datapesanan->idkamar;
        $ht->checkin = $datapesanan->dcheckin;
        $ht->checkout = $datapesanan->dcheckout;
        $ht->total = $datapesanan->total;
        $ht->metode_pembayaran = $metode;
        $ht->nama_pemesan = $datatamu->pemesan;
        $ht->nomor_pemesan = $datatamu->notelp;
        $ht->email = $datatamu->email;
        $ht->status_trans = "pending";
        $ht->tgltrans = now();
        $ht->save();

        $j = intval($datapesanan->jkamar);

        $nok = DB::table("no_kamar")->where("idkamar",'=',$datapesanan->idkamar)->where("status_kamar",'=','kosong')->limit($j)->get();


        // dd($datatamu->tamu[0][0]);

        for ($i=0; $i < $j ; $i++) {
            # code...
            $dt = new DTrans();
            $dt->idhtrans = $ht->id;
            $dt->nama_tamu = $datatamu->tamu[0][$i];
            $dt->d_kode_kamar = $nok[$i]->kode_kamar;
            $dt->tambah_bed = $datapesanan->bed;
            $dt->save();
        }

        for ($i=0; $i < count($nok) ; $i++) {
            # code...
            $up = noKamar::find($nok[$i]->id);
            $up->status_kamar = "terisi";
            $up->save();
        }


        Alert::success("Berhasil", "Berhasil Pesan Kamar , cek riwayat pesanan");
        return redirect('/user');

    }
}
