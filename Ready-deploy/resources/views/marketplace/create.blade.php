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
    <script type="text/javascript" src="../../JS/bootstrap.js"></script>
    <title>Forums</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="../prepage/mainpage.html"><img class="logoimg" src="../../Picture/logo2.png"></a>
      <label class="maintext marginleft"><a href="Home.html">Home</a></label>
      <label class="maintext marginleft"><a href="Forums.html">Forum</a></label>
      <label class="maintext marginleft"><a href="Marketplace.html">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="Profile.html">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Marketplaceunderline"></div>
      
    </div>

    <div class="maincontent">
      <span class="maintext underline"><strong>Add New Product</strong></span>
      <br><br><br>
      <form action="" method="">

        <div class="float-left marginright">
          <!-- SUBMIT PRODUCT NAME-->
          <span class="maintext">Product Name:</span><br>
          <textarea class="forum-box-create product-name" placeholder="Enter Product Name"></textarea><br>
          <!-- SUBMIT PRODUCT PRICE-->
          <span class="maintext">Product Price (IDR):</span><br>
          <input type="number" name="harga" class="forum-box-create product-price" placeholder="Enter Product Price"><br>
        </div>
        <div class="inline">
          <!-- SUBMIT PRODUCT DESCRIPTION-->
          <span class="maintext">Product Description:</span><br>
          <textarea class="forum-box-create description" placeholder="Enter Product Description"></textarea><br>
        </div>
        <div class="float-left img-submit">
          <!-- SUBMIT PRODUCT IMAGE-->
          <span class="maintext">Add Product Image: </span>
          <input type="file" name="img"><br><br><br>
          <!-- SUBMIT TO DATABASE-->
          <button class="button-main">
            <span class="maintext">Submit</span>
          </button>
        </div>

        <div class="payment-method">
          <!-- METODE PEMBAYARAN -->
          <span class="maintext">Add Payment Method:</span><br>
          <div class="forum-box-create method">
            <!-- TOKOPEDIA -->
            <span class="maintext font16">
              Tokopedia: <input type="text" name="tokopedia" class="input-sm"> 
            </span><br>
            <!-- SHOPEE -->
            <span class="maintext font16">
              shopee: <input type="text" name="tokopedia" class="input-sm margin-shopee"> 
            </span><br>
            <!-- BUKALAPAK -->
            <span class="maintext font16">
              Bukalapak: <input type="text" name="tokopedia" class="input-sm"> 
            </span>
          </div>
        </div>
      </form>
    </div>

  </body>

</html>
