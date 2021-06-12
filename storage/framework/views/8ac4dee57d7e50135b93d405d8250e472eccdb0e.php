<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('CSS/prepage.css')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('JS/bootstrap.js')); ?>"></script>
    <title>Mainpage</title>
  </head>

  <body class="mainbody">
  	<div class="Logo">
  		<a href="mainpage.html"><img class="logoimg" src="<?php echo e(asset('Picture/logo2.png')); ?>"></a>
  	</div>
  	<div class="navbar">
	  	<label class="Home"><a href="<?php echo e(route('prepage')); ?>">Home</a></label>
	  	<label class="About0"><a href="<?php echo e(route('about')); ?>">About</a></label>
	  	<label class="Aboutunderline"></label>
	  	<label class="ContactUS"><a href="<?php echo e(route('contact')); ?>">Contact Us</a>
	  	</label>

      <div class="loginmain">
        <button type="button" class="buttonmain" data-toggle="modal" data-target="#loginpopup">
          <label class="buttontext">Login</label>
        </button>
      </div>
  	</div>
  	    <br><br><br>
    
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?> 
  	<div class="aboutpage">
	  	<label class="Rectangle3"></label>
	  	<label class="About"><strong>de-plants</strong></label>
		<label class="abouttext">
			A college project that present a new version of github for planters. a place where plant enthusiasts can get connection with each other, share experiences caring for ornamental plants and
			make transactions safely and comfortably
		</label>
		<div class="signupmain">
	      <button class="buttonmain" data-toggle="modal" data-target="#signuppopup">
        <label class="buttontext">Join now</label>
      </button>
	    </div>
		<a href="<?php echo e(route('flow')); ?>">
	      <div class="Seehowitworks">
	        <button class="button2">
	          <label class="buttontext">See how it works &#8594;</label>
	        </button>
	      </div>
	    </a>
	</div>

    <div class="picloc">
      <img src="<?php echo e(asset('Picture/pic2.png')); ?>">
    </div>

    <!-- Modal -->
    <div id="loginpopup" class="modal fade" tabindex="-1">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content0">
          <div class="logo">
            
          </div>
          <div class="modal-body">
            <div class="logomodal">
              <img src="<?php echo e(asset('Picture/logo2.png')); ?>">
            </div>
            <div class="modalmain">
              <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label class="usernamee">Email</label><br>
                    <input type="text" name="email" class="textboxlocmodal"><br>
                <label class="passwordd">Password</label><br>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="password" name="password" class="textboxlocmodal2"><br><br><br>
                <button class="modalbutton">
                    <label type = "submit" class="buttontext">Login</label>
                </button>
              </form>
              <br><br><br>
              <label class="modalfootersignup"><br>
                Dont have account? <label data-toggle="modal" data-target="#signuppopup"><u>Make Account</u></label>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="signuppopup" class="modal fade" tabindex="-1">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content0">
          <div class="logo">
            
          </div>
          <div class="modal-body pop-up">
            <div class="logomodal">
              <img src="<?php echo e(asset('Picture/logo2.png')); ?>">
            </div>
            <div class="modalmain">
              <form action="<?php echo e(route('register')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="nama-sign-up">
                <label class="emaill">Name</label><br>
                    <input type="text" name="name" class="textboxlocmodal1"><br>
              </div>

              <div class="email-sign-up">
                <label class="usernamee">Email</label><br>
                    <input type="Email" name="email" class="textboxlocmodal"><br>
              </div>

              <div class="address-sign-up">
                <label class="usernamee">Address</label><br>
                    <input type="text" name="address" class="textboxlocmodal"><br>
              </div>

              <div class="telpon-sign-up">
                <label class="usernamee">Phone Number</label><br>
                    <input type="number" name="phone_number" class="textboxlocmodal"><br>
              </div>

              <div class="password-sign-up">
                <label class="passwordd">Password</label><br>
                    <input type="password" name="password" class="textboxlocmodal2" id="password"><br>
              </div>

              <div class="confirmpass-sign-up">
                <label class="passwordd">Confirm Password</label><br>
                    <input type="password" name="password_confirmation" class="textboxlocmodal2" id="confirm_password"><br><br>
              </div>

              <div class="footer-sign-up">
                <button class="modalbutton">
                    <label type="submit" class="buttontext">Sign Up</label>
                </button>
                <br><br><br><br>
                  <label class="modalfooterlogin">
                    Have account? <label data-dismiss="modal"><u>Login</u></label>
                  </label>
              </div>

            </form>
            </div>
          </div>
        </div>

      </div>
    </div>

  </body> 
</html>
<?php /**PATH /home/user/laravel/plant-website(backend)/resources/views/about.blade.php ENDPATH**/ ?>