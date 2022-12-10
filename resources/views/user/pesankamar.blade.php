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
                <a class="nav-link active" aria-current="page" href="#"><b>1.Pemesanan</b> -></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">2.Pembayaran -></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">3.Complete</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div style="padding: 50px" class="d-flex">

        <div style="position: fixed; margin-left: 800px; margin-top: -40px">
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
        </div>

        <div style="margin-left: 0px">
          <form action="/pembayaran" method="post">
            @csrf
            <h2>Detail Pemesanan</h2>
            <div class="d-flex">
                <div>

                    <select name="titlepemesan" id="" class="form-select" style="width: 100px; height: 40px;">
                        <option value="">Tuan</option>
                        <option value="">Nyonya</option>
                        <option value="">Nona</option>
                    </select>
                    Titel
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <div>

                    <input type="text" placeholder="Nama" name="namapemesan" class="form-control" style="width: 400px; height: 40px;" value="{{$userLog->name}}">
                    <label for="">Sesuai di KTP/Paspor/SIM</label>

                </div>


            </div>
            <br>
            <div class="d-flex">
                <div>
                    <input type="text" placeholder="Nomor Telepon" name="notelp" class="form-control" style="width: 400px; height: 40px;">
                    Nomor Telepon
                </div>


            </div>
            <br>
            <div>
                <input type="text" placeholder="Alamat Email" name="email" class="form-control" value="{{$userLog->email}}">
                <label for="">Email</label>
            </div>
            <br><br>

            <h2>Detail Tamu</h2>

            @for ($i = 0;$i < $detail->jkamar;$i++)

                <div>
                    <h4>Kamar {{$i+1}}</h4>
                    <br>
                    <div class="d-flex">
                        <div>

                            <select name="title[]" id="" class="form-select" style="width: 100px; height: 40px;">
                                <option value="">Tuan</option>
                                <option value="">Nyonya</option>
                                <option value="">Nona</option>
                            </select>
                            Titel
                        </div>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <div>

                            <input type="text" placeholder="Nama" name="nama[]" class="form-control" style="width: 400px; height: 40px;">
                            <label for="">Sesuai di KTP/Paspor/SIM</label>

                        </div>



                    </div>
                    <br>
                    <h4>Pesanan Tambahan</h4>
                    <div>
                        <input type="checkbox" name="bed[]" id=""> Bed tambahan (IDR 100.000)
                        <br>
                        {{-- <input type="checkbox" name="pemandangan" id=""> Pemandangan Kolam Renang (IDR 50.000) --}}
                    </div>
                    <br><br>

                </div>

            @endfor


            <br><br>
            <button class="btn btn-warning">Lanjut Pembayaran</button>
          </form>


        </div>



      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
