<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-size: 32px">HotelGo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"  href="#">1.Pemesanan -></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><b>2.Pembayaran</b> -></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">3.Complete</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div style="padding: 50px">

        {{-- <div style="position: fixed; margin-left: 800px">
          <h1>Detail Pemesanan</h1>
          <div class="card" style="width: 20rem;">
            <img src="{{asset('/storage/gambar/'.$dk->foto1)}}" class="card-img-top" height="200px" width="600px">
            <div class="card-body">
              <h5 class="card-title">{{$dk->nama_kamar}}</h5>
              <p class="card-text">{{$detail->hari}} malam , {{$detail->tamu}} tamu</p>
              <p class="card-text">Check in : {{$detail->dcheckin}}</p>
              <p class="card-text">Check out : {{$detail->dcheckout}}</p>
              <p class="card-text">Total :{{number_format($detail->total)}} </p>


            </div>
          </div>
        </div> --}}

        @php
            $datapesanan = session()->get("datapesanan");
            $datakamar = session()->get("datakamar");
        @endphp

        <div style="margin-left: 0px">
            <h2>Rincian Pesanan</h2>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Check in : {{$datapesanan->dcheckin}}</li>
                  <li class="list-group-item">Check out : {{$datapesanan->dcheckout}}</li>
                  <li class="list-group-item">Kamar : {{$datakamar->nama_kamar}}</li>
                  <li class="list-group-item">{{$datapesanan->jkamar}} kamar, {{$datapesanan->hari}} malam</li>
                  <li class="list-group-item">Total Harga : {{number_format($datapesanan->total+($datapesanan->bed*100000))}}</li>
                </ul>
              </div>

              <br><br>
          <form action="/bayar" method="post" >
            @csrf
            <h2>Metode Pembayaran</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radmetode" id="radbca" value="bca">
                <label class="form-check-label" for="radbca">
                    <img src="{{asset('images/bca.png')}}" width="100px" alt="">
                    <br>
                    nomor Rekening = 2711255925 <br>
                    Atas nama Jonathan
                </label>
                <br>
                <input class="form-check-input" type="radio" name="radmetode" id="radbri" value="bri">
                <label class="form-check-label" for="radbri">
                    <img src="{{asset('images/bri.png')}}" width="100px" alt="">
                    <br>
                    nomor Rekening = 2711255925 <br>
                    Atas nama Jonathan
                </label>


            </div>



            <br><br>
            <button class="btn btn-warning">Bayar</button>
          </form>


        </div>



      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
