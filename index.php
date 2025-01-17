
<?php
include "phpfile.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login Page</title>
      <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">
      <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" type="image/png" href="favicon.png">
  </head>
  <body>
    <div class="page-container">
      <div class="form-container">
          <img class="logo" src="https://res.cloudinary.com/aidee/image/upload/v1568650275/Merakians/Grp_logo_qkrk0u.png" alt="team logo">

      <form action="#" method="post">
        
          <h1>Sign in to Merakians</h1>
          <div class="social-icons">
              <a href="#" class="social"><i class="socicon-facebook"></i></a>
              <a href="#" class="social"><i class="socicon-google"></i></a>
            </div>
            <p>Or login with your email</p>
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <a class="help" href="#">Forgot password?</a>
            <input type="submit" name="submit" value="Login">
            <p> Don't have an account? <a class="link" href="#">Signup</a></p>
            <?php
            if (isset($error))
            {
              echo $error;
            }
          ?>
      </form>
      </div>
      
        <div class ="img-container">
            <img src="https://res.cloudinary.com/dv7ogqceo/image/upload/v1568661274/Merakians/img_20190916_081757_608.jpg" alt="Merakians Image Login" >
        </div>
      </div>
      <script src="js/script.js"></script>
  </body>
</html>