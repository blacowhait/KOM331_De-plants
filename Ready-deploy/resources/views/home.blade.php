<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/webpage.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    <title>Home</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="{{asset('Picture/logo2.png')}}"></a>
      <label class="maintext marginleft">Home</label>
      <label class="maintext marginleft"><a href="/forum">Forum</a></label>
      <label class="maintext marginleft"><a href="/market">Marketplace</a></label>
      <div class="navsearch-logo">
        <form action="{{route('search')}}" method="get">
         <input name="query" type="text" class="searchbox" placeholder="Search">
         <button type="submit" class="search-button"></button>
        </form>
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Homeunderline"></div>
      
    </div>


    <div class="maincontent">

      <div class="marketplace">

        <label class="maintext"><a href="/market"><strong>Marketplace</strong></a></label>
        <br><br><br>
        @foreach($products as $product)
        <!-- load database marketplace -->
        <div class="container-product-sm centered">
          <!-- load picture -->
          <img src="{{asset('storage/'. $product->foto)}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            {{$product->nama}}
          </div>
        </div>
        @endforeach

        <a href="/market">
          <button class="btn-exp">
            <span class="maintext font16">View More >> </span>
          </button>
        </a>
      </div>

      <div class="forums inline">
        <span class="maintext"><a href="/forum"><strong>Forums</strong></a></span>
        <br><br><br>

        <div class="overfloww">
          @foreach ($posts as $post)
          <div class="forum-box">
            <label class="maintext"><strong>{{$post->topic}}</strong></label>
            <br>
            <label class="maintext">{{$post->title}}</label>
          </div>
          @endforeach
        </div>

      </div>

    </div>


  </body>
