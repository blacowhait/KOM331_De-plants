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

      <span class="maintext font30"><strong>{{$userPost->name}}/{{$post->topic}}</strong></span>
      <br><br><br>

      <div class="forum-box-lg width1130">
        <div class="score">

          <a href="{{route('inc',$post->id)}}">
            <div class="upvote">
              
            </div>
          </a>

          <div class="score-number centered">
            <span class="maintext">{{$post->vote}}</span>
          </div>

          <a href="{{route('dec',$post->id)}}">
            <div class="downvote">
              
            </div>
          </a>
        </div>

        <div class="profile-details">
          <div class="maintextheader underline-soft"><strong>
            <!-- FORUM TITLE DARI DATABASE -->
            {{$post->title}}</strong>
          </div>

          <div class="maintext fitdiv-forum font16">
            <!-- SIGNATURE USER -->
            {{$post->deskripsi}}
          </div>
          
          <!-- IMAGE -->
          @if($post->foto)
            <img src="{{asset('storage/'. $post->foto)}}" class="forum-img"><br>
          @endif
          <div class="forum-date">
            <span class="maintext"><strong>asked {{$post->created_at}}</strong>
            @if($komen)
                <strong>- last comment {{$lastt}}</strong></span>
            @else
                </span>
            @endif
          </div>
        </div>
      </div>

      <div class="replies">


        <!-- REPLY CONTENT-->
        @foreach($komen as $comment)
            <div class="vertical-line"></div>

            <div class="horizontal-line"></div>

            <div class="replies-box">
              <div class="maintext font24 underline-soft">By: {{$comment->user->name}}</div>
              <div class="maintext font16">{{$comment->body}}</div>
              <div class="replies-date">
                <span class="maintext font16"><strong>Replies {{$comment->created_at}}</strong></span>
              </div>
            </div>
        @endforeach

        <!-- USER COMMENT -->
        <div class="vertical-line-add"></div>

        <div class="horizontal-line-add"></div>

        <div class="inline margin-comment">
         <form action="{{route('addComment', $post->id )}}" method="POST">
          @csrf
          <input type="hidden" name="post_id" value="{{ $post->id }}">
          <span class="maintext margintop font24"><strong>Add Comment:</strong></span><br><br>
          <textarea class="forum-box-create comment" name="body" placeholder="Enter Your Comment"></textarea>
          <button type="submit" class="button-main font24 block margin-left">Submit</button>
         </form>
        </div>

      </div>
    </div>
  </body>
</html>
