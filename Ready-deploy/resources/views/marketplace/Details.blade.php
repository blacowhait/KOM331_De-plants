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
    <title>Marketplace</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="../prepage/mainpage.html"><img class="logoimg" src="../../Picture/logo2.png"></a>
      <label class="maintext marginleft"><a href="Home.html">Home</a></label>
      <label class="maintext marginleft"><a href="Forums.html">Forum</a></label>
      <label class="maintext marginleft">Marketplace</label>
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

      <div class="product-details">

        <div class="container-product-lg">
          <img src="../../Picture/samplemarketplace.png" class="product-lg">
        </div>

        <div class="product-overview">

          <div class="maintext underline font30"><strong>Product Name</strong></div>
          <p class="maintext">
            <strong>Owned By : Glock-saint Isshin</strong><br>
            <i>From </i> <strong>IDR Harga</strong><br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. <br><br>
            <strong>Order on</strong>
          </p>
          <div class="forum-box-sm">

            <a href="#">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Tokopedia</span>
              </button>
            </a>

            <a href="#">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Shopee</span>
              </button>
            </a>

            <a href="#">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Bukalapak</span>
              </button>
            </a>

          </div>
        </div>

        <div class="Review"><strong>Review</strong></div>

      </div>

      <div class="product-review">

        <div class="relative overfloww">
          <div class="forum-box">
            <label class="maintext"><strong>Username</strong></label>
            <br>
            <label class="maintext">Ulasan</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Username</strong></label>
            <br>
            <label class="maintext">Ulasan</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Username</strong></label>
            <br>
            <label class="maintext">Ulasan</label>
          </div>

          <div class="forum-box">
            <label class="maintext"><strong>Username</strong></label>
            <br>
            <label class="maintext">Ulasan</label>
          </div>
        </div>
        <br><br>
        <span class="maintext font30"><strong>Add A Review</strong></span><br><br>
        <textarea class="forum-box-create" placeholder="Enter Your Review"></textarea><br>
        <button class="button-main">
          <span class="maintext">Submit</span>
        </button>

      </div>

    </div>


  </body>
</html>
