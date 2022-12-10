<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pesanan</title>
    <link rel="stylesheet" href="/css/bootstrap4.min.css?h=e375036ec037134b35a0b8420db87e73">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">

</head>

<body>

    @include("sweetalert::alert");
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top portfolio-navbar gradient" style="background-color: black">
        <div class="container"><a class="navbar-brand logo" href="/user">HotelGo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">

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


        <div style="width: 90%; padding: 100px" >
            <h1>Pesanan</h1>
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
                  </tr>
                </thead>
                <tbody>
                    @if (count($data)> 0)

                    @for ($i = 0;$i < count($data);$i++)
                    <tr>
                        <td>{{$data[$i]->orderid}}</td>
                        <td>{{$data[$i]->namapemesan}}</td>
                        <td>{{$data[$i]->namakamar}}</td>
                        <td>{{$data[$i]->checkin}}</td>
                        <td>{{$data[$i]->checkout}}</td>
                        <td>{{count($jumlah)}}</td>
                        <td>{{$data[$i]->total}}</td>
                    </tr>

                    @endfor
                    @else
                    <tr>
                        <td colspan=7><center>Belum Ada Pesanan</center></td>
                    </tr>
                    @endif

                </tbody>
              </table>
        </div>

    </main>
    {{-- <footer class="page-footer">
        <div class="container">
            HOTELGO
        </div>
    </footer> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="/js/script.min.js?h=81690170888ca326373533f544f9c5ee"></script>
</body>

</html>
