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
      <label class="maintext marginleft"><a href="/marketplace">Marketplace</a></label>
      <div class="navsearch-logo">
        <input type="text" class="searchbox" placeholder="Search">
        <div class="sm-profile-pic">
          <!-- load database profile icon -->
          <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconsmall" href="/profile">
        </div>
      </div>
      
    </div>

    <div class="maincontent">
      <form action="/edituser/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <span class="maintext font30 underline margineditprof"><strong>Edit Profile</strong></span>
        {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 
        <br><br><br><br>
        <!-- EDIT PROFILE PICTURE -->
        <div class="md-profile-pic">
          <img src="{{asset('storage/' . auth()->user()->foto )}}" class="iconmed"><br><br><br><input type="file" name="foto" id="foto">
        </div><br>
        <!-- EDIT USERNAME -->
        <span class="maintext inline marginright-editprofile">Username:<br><input type="text" name="name" class="input-sm profile-edit" value="{{ auth()->user()->name }}"></span>
        <!-- EDIT NEW PASSWORD -->
        <span class="maintext inline">New Password:<br><input type="password" name="password" class="input-sm profile-edit" ></span><br>
        <!-- EDIT EMAIL -->
        <span class="maintext inline marginright-editprofile">Email: <br> <input type="email" name="email" class="input-sm profile-edit" value="{{ auth()->user()->email }}"> </span>
        <!-- EDIT CONFIRM NEW PASSWORD -->
        <span class="maintext inline">Confirm Password:<br><input type="password" name="password_confirmation" class="input-sm profile-edit"></span><br>
        <!-- EDIT PHONE NUMBER -->
        <span class="maintext inline  marginright-editprofile">Phone Number: <br><input type="number" name="phone_number" class="input-sm profile-edit" value="{{ auth()->user()->phone_number }}"></span>
        <!-- CONFIRM OLD PASSWORD -->
        <span class="maintext inline">Current Password:<br><input type="password" name="oldpassword" class="input-sm profile-edit"></span><br>

        <div class="custom-select tag">
            <select name="tag">
              <option value="NEW!!">NEW!!</option>
              <option value="Planter">Planter</option>
              <option value="Seller">Seller</option>
              <option value="Plant-Lover">Plant-Lover</option>
              <option value="Buyer">Buyer</option>
              <option value="Forum-Master">Forum-Master</option>
              <option value="Plant-Maniac">Plant-Maniac</option>
              <option value="Plant-Master">Plant-Master</option>
              <option value="Pro-Planter">Pro-Planter</option>
            </select>
          </div><br><br><br><br>
        <!-- EDIT PROFILE DESCRIPTION -->
        <div class="inline describe">
          <span class="maintext">Describe Yourself:</span><br>
          <textarea class="forum-box-create description-profile" name="desc" placeholder="About Yourself"></textarea><br>
        </div>

        <button class="button-main marginleft-button block">Save</button>
        
      </form>


    </div>

    <script src="{{asset('JS/webpage.js')}}"></script>
  </body>
</html>
