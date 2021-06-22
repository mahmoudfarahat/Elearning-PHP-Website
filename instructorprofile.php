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
<link rel="stylesheet" href="css/instructorprofile.css">
 
</head>
<body>
  <?php  require('nav.php') ?>
<div class="container">
  <div class="row profile ">
      <div class="col-8">
        <div class="d-flex justify-content-between">
          <div>INSTRUCTOR</div>
          <a href="editinstructor.php" class="btn btn-outline-danger">Edit Profile</a>
        </div>
       
        <h2>DR.AHEMD</h2>
        <h5 class="mb-4">Developer</h5>
        <div><strong>About me</strong></div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Magni dolor asperiores ea ipsam corporis id perspiciatis velit minima eligendi 
            voluptatem consectetur deserunt eos ad, fugiat eveniet! Quod architecto veniam neque!
        </p>
        <div class="d-flex justify-content-between">
          <div class="align-self-center">My courses <span>(8)</span></div>
          <a href="addCourse.php" class="btn btn-outline-success">Add a New Course</a>
        </div>
        <div class="d-flex flex-wrap justify-content-between">
            <div class="card  my-2" style="width: 18rem;">
                <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card  my-2" style="width: 18rem;">
                <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card  my-2" style="width: 18rem;">
                <img src="images/course-logo-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>

      </div>
      <div class="col-4">
          <img   class="profile-img mb-3"  src="images/profile pic 1.jpg" alt="">
          <a class="btn btn-outline-primary d-block mb-2">Website</a>
          <a class="btn btn-outline-primary d-block mb-2">Twitter</a>
          <a class="btn btn-outline-primary d-block mb-2">Linkedin</a>

      </div>
  </div>
</div>
    

    
<?php include'footer.php' ?>