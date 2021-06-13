<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/webpage.css')">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('JS/bootstrap.js')"></script>
    <title>Forums</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="{{asset('Picture/logo2.png"></a>
      <label class="maintext marginleft"><a href="Home.html">Home</a></label>
      <label class="maintext marginleft"><a href="Forums.html">Forum</a></label>
      <label class="maintext marginleft"><a href="Marketplace.html">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <a href="/profile">
          <div class="sm-profile-pic">
            <!-- load database profile icon -->
            <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall">
          </div>
        </a>
      </div>
      <div class="Forumsunderline"></div>
      
    </div>

    <div class="maincontent">
      <span class="maintext"><strong>Create A New Forum</strong></span>
      <br><br><br>
      <form action="" method="">
        <!-- SUBMIT FORUM TOPIC-->
        <textarea class="forum-box-create" placeholder="Enter Your Forum Topic"></textarea><br>
        <!-- SUBMIT FORUM TITLE-->
        <textarea class="forum-box-create" placeholder="Enter Your Forum Title"></textarea><br>
        <!-- SUBMIT FORUM MAIN QUESTION-->
        <textarea class="forum-box-create Question" placeholder="Enter Your Question"></textarea><br>
        <!-- SUBMIT FORUM TO DATABASE-->
        <button class="button-main">
          <span class="maintext">Submit</span>
        </button>
      </form>
    </div>
