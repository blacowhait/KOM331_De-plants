
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../../CSS/webpage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    <title>Home</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="{{asset('Picture/logo2.png')}}"></a>
      <label class="maintext marginleft">Home</label>
      <label class="maintext marginleft"><a href="/forums">Forum</a></label>
      <label class="maintext marginleft"><a href="/marketplace">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="{{asset('Picture/samplemarketplace.png')}}" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Homeunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="marketplace">

        <label class="maintext"><a href="Marketplace.html"><strong>Marketplace</strong></a></label>
        <br><br><br>

        <!-- load database marketplace -->
        <div class="container-product-sm">
          <!-- load picture -->
          <img src="{{asset('Picture/samplemarketplace.png')}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            Sekiro :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="{{asset('Picture/samplemarketplace.png')}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            Sekiro :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="{{asset('Picture/samplemarketplace.png')}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            Sekiro :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="{{asset('Picture/samplemarketplace.png')}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            Sekiro :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="{{asset('Picture/samplemarketplace.png')}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            Sekiro :)
          </div>
        </div>

        <a href="/marketplace">
          <button class="btn-exp">
            <span class="maintext font16">View More >> </span>
          </button>
        </a>
      </div>

      <div class="forums">
        <label class="maintext"><a href="Forums.html"><strong>Forums</strong></a></label>
        <br><br><br>

        <div class="overfloww">
          <div class="forum-box">
            <label class="maintext"><strong>{{auth()->user()->ftitle}}</strong></label>
            <br>
            <label class="maintext">{{auth()->user()->fquestion}}</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Judul thread</strong></label>
            <br>
            <label class="maintext">Deskripsi singkat</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Judul thread</strong></label>
            <br>
            <label class="maintext">Deskripsi singkat</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Judul thread</strong></label>
            <br>
            <label class="maintext">Deskripsi singkat</label>
          </div>
        </div>

      </div>

    </div>


  </body>