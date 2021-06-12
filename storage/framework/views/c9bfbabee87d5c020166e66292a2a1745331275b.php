
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
    <script type="text/javascript" src="<?php echo e(asset('JS/bootstrap.js')); ?>"></script>
    <title>Marketplace</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="<?php echo e(asset('Picture/logo2.png')); ?>"></a>
      <label class="maintext marginleft"><a href="/home">Home</a></label>
      <label class="maintext marginleft"><a href="/forums">Forum</a></label>
      <label class="maintext marginleft">Marketplace</label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Marketplaceunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="product-details">

        <div class="container-product-lg">
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-lg">
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
          <div class="forum-box-sm"><label class="maintext">WhatsApp</label></div>
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

      </div>

    </div>


  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/productdetail.blade.php ENDPATH**/ ?>