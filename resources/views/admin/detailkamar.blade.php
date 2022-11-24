@extends('template.sidebaradmin')

@section("title", "Detail Kamar")


@section("content")

<a href="{{url('/admin/MasterKamar')}}"><button class="btn btn-danger">Kembali</button></a>
<h1>Detail Kamar </h1>

Foto Kamar
<br>
<img src="{{url("/storage/gambar/".$data->foto1)}}"alt="" style="width:300px; height:300px" >&nbsp;&nbsp;
<img src="{{url("/storage/gambar/".$data->foto2)}}"alt="" style="width:300px; height:300px" >
<br><br>
<img src="{{url("/storage/gambar/".$data->foto3)}}"alt="" style="width:300px; height:300px" >&nbsp;&nbsp;
<img src="{{url("/storage/gambar/".$data->foto4)}}"alt="" style="width:300px; height:300px" >



@endsection

