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
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Marketplaceunderline"></div>
      
    </div>
        {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <div class="maincontent">
      <span class="maintext underline"><strong>Add New Product</strong></span>
      <br><br><br>
      <form action="/market/add" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="clicked" value=0>
        <div class="float-left marginright">
          <!-- SUBMIT PRODUCT NAME-->
          <span class="maintext">Product Name:</span><br>
          <textarea name="nama" class="forum-box-create product-name" placeholder="Enter Product Name"></textarea><br>
          <!-- SUBMIT PRODUCT PRICE-->
          <span class="maintext">Product Price (IDR):</span><br>
          <input name="harga" type="number" class="forum-box-create product-price" placeholder="Enter Product Price"><br>
        </div>
        <div class="inline">
          <!-- SUBMIT PRODUCT DESCRIPTION-->
          <span class="maintext">Product Description:</span><br>
          <textarea name="desc" class="forum-box-create description" placeholder="Enter Product Description"></textarea><br>
        </div>
        <div class="float-left img-submit">
          <!-- SUBMIT PRODUCT IMAGE-->
          <span class="maintext">Add Product Image (1:1): </span>
          <input type="file" name="foto" id="foto"><br><br><br>
          <!-- SUBMIT TO DATABASE-->
          <button class="button-main">
            <span type="submit" class="maintext">Submit</span>
          </button>
        </div>

        <div class="payment-method">
          <!-- METODE PEMBAYARAN -->
          <span class="maintext">Add Payment Method:</span><br>
          <div class="forum-box-create method">
            <!-- TOKOPEDIA -->
            <span class="maintext font16">
              Tokopedia: <input name="tp" type="text" name="tokopedia" class="input-sm"> 
            </span><br>
            <!-- SHOPEE -->
            <span class="maintext font16">
              shopee: <input name="sp" type="text" name="tokopedia" class="input-sm margin-shopee"> 
            </span><br>
            <!-- BUKALAPAK -->
            <span class="maintext font16">
              Bukalapak: <input name="bp" type="text" name="tokopedia" class="input-sm"> 
            </span>
          </div>
        </div>
        
      </form>
    </div>

  </body>

</html>
