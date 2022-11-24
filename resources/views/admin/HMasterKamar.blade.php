@extends('template.sidebaradmin')
@section("title", "Dashboard")


@section("content")


{{-- <h1>Welcome Admin</h1> --}}
<h1>Master Kamar</h1>
<a href="{{url('/admin/HtambahKamar')}}"><button class="btn btn-success">Tambah kamar</button></a>

<table class="table table-info">
    <thead>
      <tr>
        <th scope="col">Nama Kamar</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Jumlah Kamar</th>
        <th scope="col">Maksimal Orang</th>
        <th scope="col">Tipe Ranjang</th>
        <th scope="col">Harga Kamar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < count($data); $i++)
        <tr>
            <td>{{$data[$i]->nama_kamar}}</td>
            <td>{{$data[$i]->tipe_kamar}}</td>
            <td>{{$data[$i]->jumlah_kamar}}</td>
            <td>{{$data[$i]->jumlah_penghuni}}</td>
            <td>{{$data[$i]->tipe_ranjang}}</td>
            <td>{{$data[$i]->harga_kamar}}</td>
            <td>
                <a href="{{url('/admin/detailkamar/'.$data[$i]->id)}}"><button>Detail</button></a>
            </td>
        </tr>
      @endfor

    </tbody>
  </table>




@endsection

