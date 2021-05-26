<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--font awesome CSS-->
    

    <!---Google Font---->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">

    <title>Space Insider</title>
</head>
<body>

<!--Start Navigation-->

<nav class="navbar navbar-expand-sm fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">i S p a c e</a>
    <span class="navbar-text text-white">Learn the world around you.&nbsp;&nbsp;</span>
    <button class="navbar-toggler" type="button" bs-toggle="collapse" bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav navbar-nav collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item pad"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="payment.php" class="nav-link">Payment Status</a></li>
        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        }
        else{
          echo '
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModel">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModel">Sign Up</a></li>';
        }
        ?>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>

<!--End navigation--->
