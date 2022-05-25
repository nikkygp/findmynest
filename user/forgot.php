<?php
include "userdataController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset Password | Findmynest</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="icon" href="../assets/images/head-logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
          <script type="text/javascript">
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);        
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });
      </script>
</head>
<body>
<section class="emenu">
  <div class="sub-emenu">
      <a href="../landing.php"><img height="70px" width="200px" class="hlogo" src="../assets/images/main-logo.svg"></a>
  </div>
</section>
  <div class="limiter">
    <div class="container-login100">
      <div class="login100-more" style="background-image: url('../assets/images/log.png" class="img-fluid');"></div>
<div class="wrap-login10 p-l-50 p-r-50 p-t-72 p-b-50">
  <div class="form-panel one">
    <div class="form-header">
      <h1>Reset Password</h1>
    </div>
    <div>
      <form action="#" method="post" autocomplete="off">
         <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger" role="alert">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                      }
                      ?>
                      <div class="btn-success">
                          Verification code is being sent!
                      </div>
                      

        <br>
         <div class="form__div">
                    <input type="text" id="email" name="email" class="form__input" placeholder=" ">
                    <label for="" class="form__label">Email</label>
          </div>
          <span id="error" class="er"><font size="2">Please enter a valid email!!</font></span>
        <div class="form-group">
          <a class="form-recovery" href="register.php">Don't have an Account? Sign Up</a><a class="form-recovery1" href="login.php">Back to Login</a>
        </div>
        <div class="form-group">
        <button class="button" id="lbtn" type="submit"name="rbtn">Sent Code</button>
        <div id="snackbar"></div>
        </div>
      </form>
    </div>
  </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    const dis = document.querySelector('.btn-success');
    const btnSub = document.querySelector('#lbtn');
    btnSub.addEventListener("click",function(){
      dis.style.display="block";
    });
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
</body>
</html>