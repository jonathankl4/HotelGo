<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-secondary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        {{-- <li class="nav-item">
                            <a href="/home" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{url('/admin/')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/MasterKamar')}}" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Kamar</span> </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/MasterFasilitas')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Fasilitas</span> </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/MasterUser')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Master User</span> </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/MasterUser')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline" style="color: black">Pesanan</span> </a>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}" class="nav-link px-0 align-middle">
                                {{-- <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Master User</span> --}}
                                <button class="btn btn-danger">Logout</button>
                             </a>
                        </li>
                    </ul>
                    <hr>
                    {{-- <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="col py-3">

                <br>
                @yield("content")
            </div>
        </div>
    </div>
    @include('sweetalert::alert')



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



</html>
