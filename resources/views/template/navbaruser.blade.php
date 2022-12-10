<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div style="background-color: #f1f1f1;
    padding: 30px;
    text-align: center;">
        <h1>Scroll Down</h1>
        <p>Scroll down to see the sticky effect.</p>
    </div>

    <div style="padding: 10px 16px;
background: #555;
color: #f1f1f1;" id="myHeader">
    <h2>My Header</h2>

    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('homeuser') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('profileuser') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pricinguser') }}">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('aboutuser') }}">About Us</a>
        </li>
      </ul>
</div>


@yield("content")
    <h1>IKI GARAPANE CHIARI</h1>
    <h2>IKI NJUAJAL MANEHH</h2>
    sticky header
    {{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sticky_header --}}

    {{-- seng kudu onok
    - gambarr"
    - fasilitas populer
    - --}}



    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
</body>
</html>
