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
    <title>Marketplace</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="{{asset('Picture/logo2.png')}}"></a>
      <label class="maintext marginleft"><a href="/home">Home</a></label>
      <label class="maintext marginleft"><a href="/forum">Forum</a></label>
      <label class="maintext marginleft"><a href="/market">Marketplace</a></label>
      <form class="inline-form" action="{{route('msearch')}}" method="get">
          <div class="custom-select filter-select">
              <select name="filter">
               <option value=>Filter</option>
               <option value="popular">Popular</option>
               <option value="expensive">Expensive</option>
               <option value="cheapest">Cheapest</option>
              </select>
            </div>
          <div class="navsearch-logo">
            <form action="{{route('msearch')}}" method="get">
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
      <div class="Marketplaceunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="marketplace">

        <label class="maintext textdarkgreen"><a href="/market/add">[ + ] Add Product</a></label>
        <br>
        <!--
        <div class="dropdown">
          <label class="maintext">Filter By: </label>
          <button onclick="myFunction()" class="dropbtn maintext">All Type</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="{{route('mfilter', 'popular')}}" class="maintext">Popular</a>
            <a href="{{route('mfilter', 'expensive')}}" class="maintext">Expensive</a>
            <a href="{{route('mfilter', 'cheapest')}}" class="maintext">Cheapest</a>
          </div>
        </div>
        
        <div class="dropdown">
          <label class="maintext">Filter By: </label>
          <span class="dropbtn maintext">[?]</span>
        </div><br>
        -->
            <br>
            <div class="product-list">
              <!-- load database marketplace -->
              @foreach($products as $product)
              <div class="container-product-md">
                <!-- load picture -->
                <a href="{{route('market.detail', $product->id)}}">
                <img src="{{asset('storage/'. $product->foto)}}" class="product-md"><br><br></a>
                <!-- load product name -->
                <div class="maintext centered">
                  <a href="ProductDetails.html"> {{$product->nama}} <br>
                  <i> Rp {{$product->price}}</i></a>
                </div>
              </div>
              @endforeach
        </div>
        
      </div>

    </div>

    <script src={{asset('JS/webpage.js')}}></script>
  </body>
</html>
