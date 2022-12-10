@extends('template.sidebaradmin')

@section("title", "Dashboard")


@section("content")


<h1>Welcome Admin</h1>
<h1>Dashboard</h1>


<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem; background-color: cadetblue;">
            <div class="card-body" >
              <h5 class="card-title" style="text-align: center">Jumlah Kamar Terisi</h5>
              {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
              <h6 style="text-align: center">{{count($kamarterisi)}}</h6>

            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem; background-color: cadetblue;">
            <div class="card-body" >
              <h5 class="card-title" style="text-align: center">Jumlah User</h5>
              {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
              <h6 style="text-align: center">{{count($jumlahuser)}}</h6>

            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem; background-color: cadetblue;">
            <div class="card-body" >
              <h5 class="card-title" style="text-align: center">Jumlah Pesanan</h5>
              {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
              <h6 style="text-align: center">{{count($jumlahtrans)}}</h6>

            </div>
          </div>
      </div>
    </div>
  </div>

@endsection

