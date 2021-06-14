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
    <title>Marketplace</title>
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
      <div class="Marketplaceunderline"></div>
      
    </div>

    <div class="maincontent">

      <div class="product-details">

        <div class="container-product-lg">
          <img src="{{asset('storage/'. $product->foto)}}" class="product-lg">
        </div>
    
        <div class="product-overview">

          <div class="maintext underline font30"><strong>{{$product->nama}}</strong></div>
          <p class="maintext">
            <strong>Owned By : {{$userPost->name}}</strong><br>
            <i>From </i> <strong>IDR {{$product->price}}</strong><br><br>
            {{$product->desc}} <br><br>
            <strong>Order on</strong>
          </p>
          <div class="forum-box-sm">
            @if ($product->tp)
            <a href="{{$product->tp}}">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Tokopedia</span>
              </button>
            </a>
            @endif
            @if ($product->sp)
            <a href="{{$product->sp}}">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Shopee</span>
              </button>
            </a>
            @endif
            @if ($product->bp)
            <a href="{{$product->bp}}">
              <button class="platformbubble">
                <span class="maintext font12 centered white">Bukalapak</span>
              </button>
            </a>
            @endif
          </div>
        </div>

      </div>
        
      <div class="product-review inline">

        <span class="maintext font30"><strong>Review</strong></span>
        <br><br>
        
        <div class="relative overfloww">
        @if ($komen)
          @foreach($komen as $comment)
          <div class="forum-box">
            <label class="maintext"><strong>{{$comment->user->name}}</strong></label>
            <br>
            <label class="maintext">{{$comment->body}}</label>
          </div>
          @endforeach
        @endif
        </div>
       
        <br><br>
        <span class="maintext font30"><strong>Add A Review</strong></span><br><br>
        <form action="{{route('addMComment', $product->id )}}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $product->id }}">
            <textarea name="body" class="forum-box-create" placeholder="Enter Your Review"></textarea><br>
            <button class="button-main">
              <span class="maintext">Submit</span>
            </button>
        </form>

      </div>

    </div>


  </body>
</html>
