@extends('template.sidebaradmin')
@section("title", "Dashboard")


@section("content")


{{-- <h1>Welcome Admin</h1> --}}
<h1>Pesanan</h1>
{{-- <a href="{{url('/admin/HtambahKamar')}}"><button class="btn btn-success">Tambah kamar</button></a> --}}

<table class="table">
    <thead>
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Kamar</th>
        <th scope="col">tanggal Check in</th>
        <th scope="col">tanggal check out</th>
        <th scope="col">jumlah kamar </th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @if (count($data) > 0)

            @for ($i = 0;$i < count($data);$i++)
            <tr>
                <td>{{$data[$i]->orderid}}</td>
                <td>{{$data[$i]->namapemesan}}</td>
                <td>{{$data[$i]->namakamar}}</td>
                <td>{{$data[$i]->checkin}}</td>
                <td>{{$data[$i]->checkout}}</td>
                <td>{{count($jumlah)}}</td>
                <td>{{$data[$i]->total}}</td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$i}}">Selesai</button></td>

                <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Selesaikan Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Yakin Selesaikan Pesanan??
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <a href="/admin/selesaikanpesanan/{{$data[$i]->orderid}}"><button type="button" class="btn btn-primary">Ya</button></a>
                        </div>
                    </div>
                    </div>
                </div>
            </tr>

            @endfor
        @else
        <tr>
            <td colspan=8><center>Belum Ada Pesanan</center></td>
        </tr>
        @endif

    </tbody>
  </table>




@endsection

