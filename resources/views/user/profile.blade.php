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
                          <a class="dropdown-item" href="/profile">Profile</a>
                          <a class="dropdown-item" href="/riwayattransaksi">Pesanan</a>
                          <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="page lanidng-page" style="background-color: white">


        <div style="width: 90%; padding: 100px" >

            <br>
            <h1>Profile</h1>
            <form action="" method="post">
                @csrf
                <div style="width: 500px">
                    <p><b>Name: </b></p>
                    <input type="text" value="{{$data->name}}" class="form-control" name="editName"> <br>
                    <p><b>Old Password: </b></p>
                    <input type="text" placeholder="old password" class="form-control" name="oldPass"> <br>
                    <p><b>New Password: </b></p>
                    <input type="text" placeholder="New password" class="form-control" name="newPass"> <br>
                    <p><b>Confirm Password: </b></p>
                    <input type="text" placeholder="Confirm password" class="form-control" name="cPass"> <br>
                </div>
                <br>
                <button type="submit" class="btn btn-danger">Edit Profil</button>
            </form>
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
