
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('CSS/webpage.css')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('JS/bootstrap.js')); ?>"></script>
    <title>Forums</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/Home"><img class="logoimg" src="<?php echo e(asset('Picture/logo2.png')); ?>"></a>
      <label class="maintext marginleft"><a href="/home">Home</a></label>
      <label class="maintext marginleft"><a href="/forums">Forum</a></label>
      <label class="maintext marginleft"><a href="/marketplace">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <div class="sm-profile-pic">
          <!-- load database profile icon -->
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="iconsmall">
        </div>
      </div>
     
      
    </div>

    <div class="maincontent">

      <div class="maintext font30 underline-profile"><strong><?php echo e(auth()->user()->name); ?> Profile</strong>       <a href="/home/edituser"><i class="fa fa-gear" style="font-size:24px"></i></a>
      </div><br>

      <div class="forum-box-lg">

        <div class="lg-profile-pic">
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="iconlarge">
        </div>

        <div class="profile-details">
          <div class="maintextheader"><strong>
            <!-- USERNAME DARI DATABASE -->
            <?php echo e(auth()->user()->name); ?> Profile</strong>
          </div>
          <div class="maintext underline">
            <!-- TANGGAL AKUN DIBUAT -->
            Created at <?php echo e(auth()->user()->created_at); ?>

          </div>
          <div class="maintext fitdiv font16">
            <!-- SIGNATURE USER -->
            <?php echo e(auth()->user()->bio); ?>

          </div>
          <div class="custom-select tag">
            <select>
              <option value="0">NEW!!</option>
              <option value="1">Planter</option>
              <option value="2">Seller</option>
              <option value="3">Plant-Lover</option>
              <option value="4">Buyer</option>
              <option value="5">Forum-Master</option>
              <option value="6">Plant-Maniac</option>
              <option value="7">Plant-Master</option>
              <option value="8">Pro-Planter</option>
            </select>
          </div>
        </div>

      </div>

      <div class="maintext font30 underline-profile"><strong><?php echo e(auth()->user()->name); ?> Product</strong></div><br><br>


      <div class="user-product border">

        <!-- load database marketplace -->
        <div class="container-product-sm">
          <!-- load picture -->
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            <?php echo e(auth()->user()->name); ?> :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            <?php echo e(auth()->user()->name); ?> :)
          </div>
        </div>

        <div class="container-product-sm">
          <!-- load picture -->
          <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            <?php echo e(auth()->user()->name); ?> :)
          </div>
        </div>

      </div><br><br>

      <div class="maintext font30 underline-profile"><strong><?php echo e(auth()->user()->name); ?> Thread</strong></div><br><br>

      <div class="overfloww">

          <div class="forum-box">
            <label class="maintext"><strong><?php echo e(auth()->user()->ftitle); ?></strong></label>
            <br>
            <label class="maintext"><?php echo e(auth()->user()->fquestion); ?></label>
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

    <script src="<?php echo e(asset('JS/webpage.js')); ?>"></script>

  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/profile.blade.php ENDPATH**/ ?>