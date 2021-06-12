
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
    <title>Edit Profile</title>
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
          <img src="<?php echo e(asset('/img/'.auth()->user()->profilepict)); ?>" class="iconsmall">
        </div>
        </a>
      </div>
     
    </div>

    <div class="maincontent">

      <form action=" /home/edituser" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <span class="maintext font30 underline margineditprof"><strong>Edit Profile</strong></span><br><br><br><br>
        <!-- EDIT PROFILE PICTURE -->
        <div class="md-profile-pic">
          <img src="<?php echo e(asset('/img/'.auth()->user()->profilepict)); ?>" class="iconmed"><br><br><br><input type="file" class="form-control" name="profilepict" placeholder="profilepict" value="">
        </div><br>
        <!-- EDIT USERNAME -->
        <span class="maintext inline marginright-editprofile">Username:<br><input type="name" class="form-control" name="name" placeholder="Name" value="<?php echo e(auth()->user()->name); ?>"></span>
        <!-- EDIT NEW PASSWORD -->
        <span class="maintext inline">New Password:<br><input type="password" class="form-control" name="password" placeholder="Password"></span><br>
        <!-- EDIT EMAIL -->
        <span class="maintext inline marginright-editprofile">Email: <br> <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(auth()->user()->email); ?>"> </span>
        <!-- EDIT CONFIRM NEW PASSWORD -->
        <span class="maintext inline">Confirm Password:<br><input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation"></span><br>
        <!-- EDIT PHONE NUMBER -->
        <span class="maintext inline  marginright-editprofile">Phone Number: <br><input type="phone_number" class="form-control" name="phone_number" placeholder="Phone Number" value="<?php echo e(auth()->user()->phone_number); ?>"></span>
        <!-- CONFIRM OLD PASSWORD -->
        <span class="maintext inline">Current Password:<br><input type="password" value="<?php echo e(auth()->user()->password); ?>"></span><br><br><br><b></br><br><br><br>
        <!-- EDIT PROFILE DESCRIPTION -->
        <div class="inline describe">
          <span class="maintext">Describe Yourself:</span><br>
          <textarea type="bio" class="bio" name="bio" placeholder="About Yourself"></textarea><br>
        </div>

        <button type="submit" class="btn btn-primary left-sm">Save</button>
        
      </form>

      <form action="/home/edituser/<?php echo e(auth()->user()->id); ?>" method="post" onsubmit="return confirm('Are you sure you wanna delete account?')">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button class="btn btn-danger btn-sm">
                Delete Account
              </button>

              <div class="col-5">
            <a href="/" color="red">Logout</a>
          </div>
        </form>


    </div>


  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/v_edituser.blade.php ENDPATH**/ ?>