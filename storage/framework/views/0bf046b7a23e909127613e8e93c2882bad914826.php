
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
    <title>Forums</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="<?php echo e(asset('Picture/logo2.png')); ?>"></a>
      <label class="maintext marginleft"><a href="/home">Home</a></label>
      <label class="maintext marginleft"><a href="/forums">Forum</a></label>
      <label class="maintext marginleft"><a href="/marketplace">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="<?php echo e(asset('Picture/samplemarketplace.png')); ?>" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Forumsunderline"></div>
      
    </div>

    <div class="maincontent">
      <span class="maintext"><strong>Create A New Forum</strong></span>
      <br><br><br>
      <form action=" /tambahforum " method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <!-- SUBMIT FORUM TOPIC-->
        <textarea type="ftopic" class="form-control" name="ftopic" placeholder="Enter Your Forum Topic" ></textarea><br>
        <!-- SUBMIT FORUM TITLE-->
        <textarea type="ftitle" class="form-control" name="ftitle" placeholder="Enter Your Forum Title" ></textarea><br>
        <!-- SUBMIT FORUM MAIN QUESTION-->
        <textarea type="ftquestion" class="form-control" name="fquestion" placeholder="Enter Your Question" ></textarea><br>
        <!-- SUBMIT FORUM TO DATABASE-->
        <button class="button-main" type="submit" class="btn btn-primary btn-block">
          <span class="maintext" type="submit" class="btn btn-primary btn-block">Submit</span>
        </button>
      </form>
    </div><?php /**PATH C:\Users\HP\Downloads\Mainpage#1\resources\views/createforum.blade.php ENDPATH**/ ?>