<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">

 

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">
 
</head>
<body>
    <?php  require('nav.php')   ?>
     
     <div class="container d-flex justify-content-center  ">
        <form  class="signup-form col-lg-4 col-xxl-3 col-md-5 col-sm-7">
          <h4>Log in to Your Account</h4>
          <hr>
          <button type="submit" class="btn btn-primary submit-btn mb-3">Continue with Facebook</button>
          <button type="submit" class="btn btn-outline-primary submit-btn mb-3">Continue with Google</button>
           
          <div class="mb-3 ">
              <input type="email" placeholder="Email "  class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <div class="mb-3">
              <input type="password" placeholder="Password"  class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary submit-btn">Log In</button>
            <div class="my-3">or <a href="https://localhost/elearnproject/forgotpassword.php">Forgot Password</a></div>
            <hr>
            <div>Don't have an account? <a href="https://localhost/elearnproject/signup.php">Sign up</a></div>
          </form>

     </div>
</body>
</html>