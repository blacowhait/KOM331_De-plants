<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/webpage.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    <title>Forums</title>
  </head>

  <body class="mainbody">

    <div class="navbar">

      <a href="/home"><img class="logoimg" src="{{asset('Picture/logo2.png')}}"></a>
      <label class="maintext marginleft"><a href="/home">Home</a></label>
      <label class="maintext marginleft"><a href="/forum">Forum</a></label>
      <label class="maintext marginleft"><a href="/market">Marketplace</a></label>
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

      <div class="forums">
        <label class="maintext"><a href="/forum/add">[ + ] Make A Thread</a></label>

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
          @foreach ($posts as $post)
          <a href="{{route('forum.detail',$post->id)}}">
            <div class="forum-box">
              <span class="maintext"><strong>{{$post->topic}}</strong></span>
              <br>
              <span class="maintext">{{$post->title}}</span>
            </div>
          </a>
          @endforeach
        </div>

      </div>

    </div>


  </body>
</html>
