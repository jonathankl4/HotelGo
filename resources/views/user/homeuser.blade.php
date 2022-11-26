<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HotelGo</title>
</head>
<body>
    <div style="background-color: #f1f1f1;
    padding: 30px;
    text-align: center;">
        <h1>Scroll Down</h1>
        <p>Scroll down to see the sticky effect.</p>
    </div>

    @include('layout.navuser')


    <h1>IKI GARAPANE CHIARI</h1>
    <h2>IKI NJUAJAL MANEHH</h2>
    sticky header
    {{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sticky_header --}}

    seng kudu onok
    - gambarr"
    - fasilitas populer
    -

</body>

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

</html>
