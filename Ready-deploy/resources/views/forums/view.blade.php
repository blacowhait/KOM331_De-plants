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
      <form class="inline-form" action="{{route('fsearch')}}" method="get">
          <div class="custom-select filter-select">
              <select name="filter">

               <option value=>Filter</option>

               <option value="trending">Trending</option>
               <option value="newest">Newest</option>
               <option value="oldest">Oldest</option>
              </select>
            </div>
      <div class="navsearch-logo">
         <input name="query" type="text" class="searchbox" placeholder="Search">
         <button type="submit" class="search-button"></button>
        </form>
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

       <!-- <div class="dropdown">
          <label class="maintext">Filter By: </label>
          <button onclick="myFunction()" class="dropbtn maintext">All Topic</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="{{route('ffilter', 'trending')}}" class="maintext">Trending</a>
            <a href="{{route('ffilter', 'latest')}}" class="maintext">Latest</a>
            <a href="{{route('ffilter', 'newest')}}" class="maintext">Newest</a>
          </div>
        </div> -->
        <!--
        <div class="dropdown">
          <label class="maintext">Filter By: </label>

          <span class="dropbtn maintext">[?]</span>

        </div><br>
        -->
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

    <script src={{asset('JS/webpage.js')}}></script>
  </body>
</html>
