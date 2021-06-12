
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('CSS/webpage.css')); ?>">
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

      <div class="marketplace">

        <label class="maintext textdarkgreen"><a href="/addproduct">[ + ] Add Product</a></label>
        <br>

        <div class="dropdown">
          <label class="maintext">Filter By: </label>
          <button onclick="myFunction()" class="dropbtn maintext">All Type</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home" class="maintext">Type 1</a>
            <a href="#about" class="maintext">Type 2</a>
            <a href="#contact" class="maintext">Type 3</a>
          </div>
        </div><br>

        <div class="product-list">
          <!-- load database marketplace -->
          <div class="container-product-md">
            <!-- load picture -->
            <a href="/ProductDetails">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="ProductDetails.html">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

          <div class="container-product-md">
            <!-- load picture -->
            <a href="#">
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-md"><br><br></a>
            <!-- load product name -->
            <div class="maintext centered">
              <a href="#">Product Name :) <br>
              <i>Product Price</i></a>
            </div>
          </div>

        </div>
      

      </div>

    </div>


  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/marketplace.blade.php ENDPATH**/ ?>