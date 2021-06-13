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
      <label class="maintext marginleft">Forum</label>
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
      <div class="Forumsunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="forums">
        <label class="maintext"><a href="Forums-Create.html">[ + ] Make A Thread</a></label>

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
          <a href="Forum-Full.html">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="Forum-Full.html">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="Forum-Full.html">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="Forum-Full.html">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="Forum-Full.html">
            <div class="forum-box">
              <span class="maintext"><strong>Judul thread</strong></span>
              <br>
              <span class="maintext">Deskripsi singkat</span>
            </div>
          </a>

          <a href="Forum-Full.html">
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
</html>
