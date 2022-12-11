@extends('template.sidebaradmin')
@section("title", "Dashboard")


@section("content")


{{-- <h1>Welcome Admin</h1> --}}
<h1>Laporan Pendapatan</h1>
{{-- <a href="{{url('/admin/HtambahKamar')}}"><button class="btn btn-success">Tambah kamar</button></a> --}}


    <div class="form-control" style="background-color: darkgrey; padding: 10px; width: 85%; height: 150px;" >
        <form action="{{url('/admin/Flaporanpendapatan')}}" method="GET"  >
            <div class="d-flex">
                <div class="" style="width: 500px;height: 90px;">
                    <label class="label">
                        <span class="">Tanggal awal</span>
                    </label><br>
                    <input type="date"  name="tgl1" class="form-control" style="height: 40px">
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div  style="width: 500px;height: 90px;">
                    <label class="label">
                        <span class="">Tanggal akhir</span>
                    </label>
                    <br>
                    <input type="date"  name="tgl2" class="form-control" style="height: 40px" >
                </div>
                &nbsp;
                <br>
                <button class="btn btn-warning" style="height: 50px; margin-top: 15px; ">Search</button>
            </div>
        </form>
        <div class="d-flex">

            <button onclick="window.print()" class="btn btn-warning" style="margin-top: -20px">Print</button>
        </div>
    </div>


<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal Transaksi</th>
        <th scope="col">Pendapatan</th>

      </tr>
    </thead>
    <tbody>
        @if (count($data) > 0)

            @for ($i = 0;$i < count($data);$i++)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$data[$i]->tgltrans}}</td>
                <td>{{number_format($data[$i]->total)}}</td>

            </tr>

            @endfor
            <tr>
                <td colspan="8"><b>Total = {{number_format($total)}}</b></td>
            </tr>
        @else
        <tr>
            <td colspan=8><center>Empty</center></td>
        </tr>
        @endif

    </tbody>
  </table>




@endsection

