<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-tulisan2.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services"><b>Pelayanan</b> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><b>Tentang</b></a></li>
                    <li class="nav-item"><a class="nav-link" href={{url("/login")}}><b>Masuk</b></a></li>
                    <li class="nav-item"><a class="nav-link" href={{url("/register")}}><button class="btn btn-success">Daftar</button></a></li>

                </ul>
            </div>
        </div>
    </nav> --}}
    <div class="main">


        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="/loginuser" method="POST" id="signup-form" class="signup-form" >
                        @csrf
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                            <span style="color: red;">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span style="color: red;">{{ $errors->first('password') }}</span>

                        </div>
                        <div class="form-group">
                            {{-- <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/> --}}
                            <button class="form-submit">Login</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Belum punya akun? <a href="/register" class="loginhere-link">Daftar Di sini</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    @include('sweetalert::alert')

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
