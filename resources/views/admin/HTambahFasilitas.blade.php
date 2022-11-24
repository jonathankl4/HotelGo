@extends('template.sidebaradmin')

@section("title", "Dashboard")


@section("content")

<h1>Tambah Kamar Baru</h1>
<form action="{{url('/admin/tambahfasilitas')}}" method="post">
    @csrf
    fasilitas
    <input type="text" class="form-control" style="width: 400px" name="fasilitas">
    <span style="color: red;">{{ $errors->first('fasilitas') }}</span>
    <br>

    <button class="btn btn-success">Tambah</button>






</form>

@endsection

