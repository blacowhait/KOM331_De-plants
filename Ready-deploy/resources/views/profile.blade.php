<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="sm-profile-pic">
          <!-- load database profile icon -->
          <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall">
        </div>
      </div>
      
    </div>

    <div class="maincontent">

      <div class="maintext font30 underline-profile"><strong>{{ auth()->user()->name }} Profile</strong>       <a href="/edituser"><i class="fa fa-gear" style="font-size:24px"></i></a>
      </div><br>

      <div class="forum-box-lg">

        <div class="lg-profile-pic">
          <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconlarge">
        </div>

        <div class="profile-details">
          <div class="maintextheader"><strong>
            <!-- USERNAME DARI DATABASE -->
            {{ auth()->user()->name }}</strong>
          </div>
          <div class="maintext underline">
            <!-- TANGGAL AKUN DIBUAT -->
            Created at {{ auth()->user()->created_at }} GMT
          </div>
          <div class="maintext fitdiv font16">
            <!-- SIGNATURE USER -->
            {{ auth()->user()->desc }}
          </div>
          <div class="tag-profile centered">
              <span>{{ auth()->user()->tag }}</span>
          </div><br><br><br><br>
        </div>

      </div>

      <div class="maintext font30 underline-profile"><strong>{{$user->name}}'s Product</strong></div><br><br>

      <div class="user-product border">

        <!-- load database marketplace -->
        @foreach($products as $product)
        <div class="container-product-sm centered">
          <!-- load picture -->
          <img src="{{asset('storage/'. $product->foto)}}" class="product-sm"><br><br>
          <!-- load product name -->
          <div class="maintext centered">
            {{$product->nama}}
          </div>
          <!-- DELETE BUTTON -->
          <div class="centered">
            <form action="{{route('deletem', $product->id)}}">
                @csrf
                <button class="button-sm red">Delete</button>
            </form>
          </div>

        </div>
        @endforeach

      </div><br><br>

      <div class="maintext font30 underline-profile"><strong>{{$user->name}}'s Thread</strong></div><br><br>

      <div class="overfloww">
          @foreach ($posts as $post)
          <div class="forum-box">
            <label class="maintext"><strong>{{$post->topic}}</strong></label>
            <br>
            <label class="maintext">{{$post->title}}</label>
            <!-- DELETE BUTTON -->
            <div class="float-right margin-delete-button">
             <form action="{{route('deletep', $post->id)}}">
              <button class="button-sm red">Delete</button>
             </form>
            </div>
          </div>
          @endforeach
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button type="submit" class="button-main margin-top red font24 marginleft-button block">Log Out</button>
      </form>

    </div>

    <script src="../../JS/webpage.js"></script>

  </body>
</html>
