
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

      <span class="maintext font30"><strong><?php echo e(auth()->user()->name); ?>/<?php echo e(auth()->user()->ftopic); ?></strong></span>
      <br><br><br>

      <div class="forum-box-lg width1130">
        <div class="score">

          <a href="#">
            <div class="upvote">
              
            </div>
          </a>

          <div class="score-number centered">
            <span class="maintext">147</span>
          </div>

          <a href="#">
            <div class="downvote">
              
            </div>
          </a>
        </div>

        <div class="profile-details">
          <div class="maintextheader underline-soft"><strong>
            <!-- FORUM TITLE DARI DATABASE -->
            <?php echo e(auth()->user()->ftitle); ?></strong>
          </div>

          <div class="maintext fitdiv-forum font16">
            <!-- SIGNATURE USER -->
           <?php echo e(auth()->user()->fquestion); ?>

          </div>

          <div class="forum-date">
            <span class="maintext"><strong>asked 12 oct 2021 - last comment 16 oct 2021</strong></span>
          </div>
        </div>
      </div>

      <div class="replies">
        <div class="vertical-line"></div>

        <div class="replies-box">
          <div class="maintext font24 underline-soft">By: Username | Replies To: @NamaUser</div>
          <div class="maintext font16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</div>
          <div class="replies-date">
            <span class="maintext font16"><strong>Replies 12 oct 2021</strong></span>
          </div>
        </div>

        <div class="replies-box">
          <div class="maintext font24 underline-soft">By: Username | Replies To: @NamaUser</div>
          <div class="maintext font16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</div>
          <div class="replies-date">
            <span class="maintext font16"><strong>Replies 12 oct 2021</strong></span>
          </div>
        </div>

        <div class="replies-box">
          <div class="maintext font24 underline-soft">By: Username | Replies To: @NamaUser</div>
          <div class="maintext font16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</div>
          <div class="replies-date">
            <span class="maintext font16"><strong>Replies 12 oct 2021</strong></span>
          </div>
        </div>

      </div>
    </div>
  </body>
</html><?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/forumfull.blade.php ENDPATH**/ ?>