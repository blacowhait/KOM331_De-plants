
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
      <label class="maintext marginleft">Forum</label>
      <label class="maintext marginleft"><a href="/marketplace">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="<?php echo e(asset('Picture/samplemarketplace.pn')); ?>" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Forumsunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="forums">
        <label class="maintext"><a href="/createforum">[ + ] Make A Thread</a></label>

        <div class="dropdown">
          <label class="maintext">Filter By: </label>
          <button onclick="myFunction()" class="dropbtn maintext">All Topic</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home" class="maintext">Topic 1</a>
            <a href="#about" class="maintext">Topic 2</a>
            <a href="#contact" class="maintext">Topic 3</a>
          </div>
        </div>

        <div class="forum-list">
          <a href="/forumfull">
            <div class="forum-box">
              <span class="maintext"><strong><?php echo e(auth()->user()->ftitle); ?></strong></span>
              <br>
              <span class="maintext"><?php echo e(auth()->user()->fquestion); ?></span>
            </div>
          </a>

          <a href="/forumfull">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="/forumfull">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>


          
        </div>

      </div>

    </div>


  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Mainpage#1\resources\views/forum.blade.php ENDPATH**/ ?>