<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Booking Kamar</title>
    <link rel="stylesheet" href="/css/bootstrap4.min.css?h=e375036ec037134b35a0b8420db87e73">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top portfolio-navbar gradient" style="background-color: black">
        <div class="container"><a class="navbar-brand logo" href="#">HotelGo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#infoumum">Info Umum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#lokasi">Lokasi</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#kamar">Kamar</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#akomodasi">Tentang Akomodasi</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#fasitas">Fasilitas</a></li>
                    <li class="dropdown nav-item" role="presentation">
                        <a href="" class=" dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Akun
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Pesanan</a>
                          <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <main class="page lanidng-page" style="background-color: white">

        <section class="portfolio-block block-intro">
        <br>
            <div class="container">
                <div class="about-me"></div>
            </div>
        </section>
        <section class="portfolio-block photography" id="infoumum">
            <div class="container">
                <div class="row no-gutters" >
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel1.jpg?h=dfa56246a493db02797b024ba354688f" style="height: 360px ;width: 360px" ></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel2.jpg?h=c5fb06440e9759bec9433393cd5a9761" style="height: 360px ;width: 360px" ></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel3.jpg?h=e138a8bfe4ed72819d3bbf626d732745" style="height: 360px ;width: 360px"></a></div>
                </div>
                <div style="height: 5px"></div>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel4.jpg?h=dfa56246a493db02797b024ba354688f" style="height: 360px ;width: 360px"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel5.jpg?h=c5fb06440e9759bec9433393cd5a9761" style="height: 360px ;width: 360px"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/images/hotel6.jpg?h=e138a8bfe4ed72819d3bbf626d732745"style="height: 360px ;width: 360px"></a></div>
                </div>
            </div>
        </section>

        <br>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3>Mulai Dari IDR {{number_format($termurah->ht)}}/malam</h3>&nbsp;&nbsp;<a href="#kamar"><button class="btn btn-outline-primary btn-lg" type="button">Lihat Kamar</button></a></div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>Fasilitas Populer</h2>
                </div>
                <!-- End: portfolio heading -->
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Restoran</p>
                        <p>Resepsionis 24 Jam</p>
                        <p>WiFi</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Lift</p>
                        <p>Parkiran Luas</p>
                        <p>AC</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover" id="lokasi"><a href="#"></a>
                        <p>Penyimpanan Barang</p>
                        <p>Fasilitas Rapat</p>
                        <p>Fasiltas Ramah Difabel</p>
                    </div>
                </div>
                <div class="heading" id="kamar">
                    <h2>Lokasi</h2>
                </div>
                {{-- <h1 style="margin: 36px;padding: 0px;">Lokasi</h1> --}}
                <p>Jalan Ambengan No 14 , Ketapang , Kec Genteng, KOta SBY, Jawa Timur 60272<br>Link Google Maps:&nbsp;<a href="{{url('https://goo.gl/maps/aS9ue1k5j4ogVNrc7')}}">https://goo.gl/maps/aS9ue1k5j4ogVNrc7</a> </p>
                <!-- Start: portfolio heading -->
                <div class="heading" id="kamar">
                    <form action="/pesan" method="post">
                        @csrf
                        <div class="row no-gutters">
                            <div class="col-md-6 col-lg-4 item ">
                                <p>Check-in</p>

                                <input type="date" name="dcheckin" class="form-control" style="width: 200px">

                            </div>
                            <div class="col-md-6 col-lg-4 item ">
                                <p>Check-out</p>

                                <input type="date" name="dcheckout" class="form-control" style="width: 200px">

                            </div>
                            <div class="col-md-6 col-lg-4 item ">
                                Jumlah Kamar dan Tamu
                                <br>
                                kamar
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                tamu
                                <div class="d-flex">


                                    <input type="text" name="kamar" class="form-control" style="width: 100px">
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <input type="text" name="tamu" class="form-control" style="width: 100px">
                                </div>
                            </div>

                        </div>
                        <h2>Pilihan Kamar</h2>
                        <table class="table">
                            <thead>

                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($kamar);$i++)

                                    <tr>
                                        <td style="width: 200px" ><img src="{{asset('/storage/gambar/'.$kamar[$i]->foto1)}}" width="300px" height="200px"></td>
                                        <td style="padding-left: 0px; ">
                                            <b style="font-size: 25px">{{$kamar[$i]->nama_kamar}}</b>
                                            <br><br>

                                            {{-- <img src="{{url('/images/breakfast.png')}}" height="30px" width="30px"> 1 {{$kamar[$i]->tipe_ranjang}} Bed
                                            <br><br> --}}
                                            <img src="{{url('/images/bed.png')}}" height="30px" width="30px"> 1 {{$kamar[$i]->tipe_ranjang}} Bed
                                            <br>
                                            <br>
                                            <img src="{{url('/images/user.png')}}" height="25px" width="25px"> {{$kamar[$i]->jumlah_penghuni}} Tamu

                                        </td>
                                        <td>
                                            <a href="">Lihat Detail</a>
                                            <br>
                                            <br>
                                            <b style="color: red">IDR {{number_format($kamar[$i]->harga_kamar)}}</b>
                                            <br>
                                            per kamar per malam
                                            <br>
                                            <a href="{{url('/pilihkamar/'.$kamar[$i]->id)}}"><button class="btn btn-success" name="btnpilih" value={{$kamar[$i]->id}} >PILIH</button></a>
                                        </td>



                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </form>
                </div>
                <!-- End: portfolio heading -->
                <div id="akomodasi"></div>
                <br><br>
                <h1>Tentang Akomodasi</h1>
                <div class="row no-gutters" >
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Waktu Checkin &amp; chekout</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Waktu Check-in 13:00-13:00</p>
                        <p>Waktu Check-out 12:00</p>
                    </div>
                </div>
                <br>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Kebijakan</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <b>Anak</b>
                        <p>Tamu umur berapa pun bisa menginap di sini.
                            Anak-anak 7 tahun ke atas dianggap sebagai tamu dewasa.
                        </p>

                        <b>Deposit</b>
                        <p>Tamu perlu membayar deposit saat Check-in.</p>
                        <b>Sarapan</b>
                        <p>Sarapan Sarapan Tersedia pukul 06:30 - 10:00 waktu lokal.</p>
                        <b>Hewan Peliharaan</b>
                        <p>Tidak Diperbolehkan membawa hewan peliharaan.</p>
                        <b>Merokok</b>
                        <p>Kamar bebas asap rokok.</p>
                        <b>Alkohol</b>
                        <p>Minuman beralkohol diperbolehkan.</p>


                    </div>
                </div>
                <br>
                <div class="row no-gutters" >
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Deskripsi</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Berlokasi strategis di area komersil di Surabaya dengan banyak toko dan tempat makan, Hotelgo Surabaya menawarkan akomodasi berbintang 5 yang bisa kamu pilih untuk menikmati tidur malam yang nyenyak selama kegiatan bisnis atau bersantai. Hotel ini menyediakan 3 restoran dan cafe, taman bermain anak dan kolam renang infinity dengan pemandangan kota. WiFi gratis tersedia di seluruh area hotel.</p>

                    </div>
                </div>
                <br>
                {{-- <div class="row no-gutters" >
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <b>Fasilitas</b>
                        <p>Fasilitas Popular</p>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a>
                        <p>Jenis</p>

                    </div>
                </div> --}}
            </div>

        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            HOTELGO
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="/js/script.min.js?h=81690170888ca326373533f544f9c5ee"></script>
</body>

</html>
