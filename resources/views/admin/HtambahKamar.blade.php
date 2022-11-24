@extends('template.sidebaradmin')

@section("title", "Dashboard")


@section("content")

<h1>Tambah Kamar Baru</h1>
<form action="{{url('/admin/tambahkamar')}}" method="post">
    @csrf
    Nama Kamar
    <input type="text" class="form-control" style="width: 400px" name="namakamar">
    <span style="color: red;">{{ $errors->first('namakamar') }}</span>
    <br>
    Tipe Kamar
    <select  id="" class="form-select" style="width: 400px" name="tipekamar">
        <option value="standart">Standart</option>
        <option value="superior">Superior</option>
        <option value="vip">Vip</option>
    </select>
    <br>
    Jumlah Kamar
    <input type="text" class="form-control" style="width: 400px" name="jumlahkamar">
    <span style="color: red;">{{ $errors->first('jumlahkamar') }}</span>
    <br>
    Jumlah Penghuni
    <input type="text" class="form-control" style="width: 400px" name="jumlahpenghuni">
    <span style="color: red;">{{ $errors->first('jumlahpenghuni') }}</span>
    <br>
    Tipe Ranjang
    <select  id="" class="form-select" style="width: 400px" name="tiperanjang">
        <option value="single">Single Bed</option>
        <option value="twin">Twin Bed</option>
        <option value="queen">Queen Bed</option>
        <option value="king`">King Bed</option>
    </select>
    <br>
    Harga
    <input type="text" class="form-control" style="width: 400px" name="hargakamar">
    <span style="color: red;">{{ $errors->first('hargakamar') }}</span>
    <br>
    <button class="btn btn-success">Tambah</button>






</form>

@endsection

