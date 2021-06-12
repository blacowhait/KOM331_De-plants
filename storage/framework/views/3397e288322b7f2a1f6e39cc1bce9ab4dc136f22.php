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
      <a href="<?php echo e(route('prepage')); ?>"><img class="logoimg" src="<?php echo e(asset('Picture/logo2.png')); ?>"></a>
    </div>
    <div class="navbar">
      <div class="Home"><a href="<?php echo e(route('prepage')); ?>">Home</a></div>
      <div class="About0"><a href="<?php echo e(route('about')); ?>">About</a></div>
      <label class="ContactUS"><a href="<?php echo e(route('contact')); ?>">Contact Us</a>
	  	</label>
      <div class="Contactusunderline"></div>

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
    <div class="ContactUsheader">
      Contact Us
    </div>
    <div class="ContactUstext">
      If you find something to make this website better or found something bad for you, please write down your idea below.
      <br>
    </div>
    <div class="formcontact">
        <label class="youremail">Email</label>
          <div class="textboxloc">
            <span class="maintext">Admin@deplants.com</span>
          </div>
        <label class="howcanwehelp">Phone Number</label>
          <div class="textboxloc2">
            <span class="maintext">0854-3082-6764</span>
          </div>
        <label class="Address">Address</label>
          <div class="textboxloc3">
            <span class="maintext">Kampus IPB, Jl. Raya Dramaga, Babakan, Kec. Dramaga, Kota Bogor, Jawa Barat 16680</span>
          </div>
    </div>

    <div class="picloc">
      <img src="<?php echo e(asset('Picture/pic3.png')); ?>">
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
<?php /**PATH C:\Users\HP\Downloads\Dari grey\resources\views/contact.blade.php ENDPATH**/ ?>