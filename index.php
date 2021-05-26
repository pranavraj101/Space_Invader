<?php
include('./header.php');
?>

<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/vidban.mp4" type="">
    </video>
    <div class="vid-overlay">
    </div>
    </div>

    <div class="vid-content">
      <h1 class="my-content">Welcome to Space Insider</h1>
      <small class="my-content">Learn the world around around you</small>
      <br><br>
      <?php
        if(!isset($_SESSION['is_login'])){
          echo '<a href="#" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#stuRegModel">Get Started</a>';

        }
        else
        {
          echo '<a href="#" class="btn btn-primary ">My Profile</a>';
        }
      ?><a href="#" class="btn btn-primary ">Air Canvas</a>
     
     </div>
  
</div>
<!--Video Background-->

<!---text banner--->
<div class="container-fluid txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book mr-3"></i>    100+ Online Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>    Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>    Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>    Money Back Guarantee*</h5>
    </div>
  </div>
</div>
<!--ending--->


<!---courses banner--->
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1><br><hr>
  <!--deck of courses-->
  <div class="row">
  
  <div class="ccard col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="img/c2.webp" alt="Thumbnail [100%x225]" holder-rendered="true" style="height: 225px; width: 100%; display: block;">
      <div class="card-body">
        <p class="card-text">Make your kid learn Mathematical Operations in a fun with our specialized course</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 8999</del></small><span class="font-weight-bolder">&#8377 990</span></p>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
            <a href="#" class="btn btn-danger text-white font-weight-bolder float-right ">Enroll</a>
          </div>               
        </div>
      </div>
    </div>
  </div>
  <div class="ccard col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="img/c3.png" alt="Thumbnail [100%x225]" holder-rendered="true" style="height: 225px; width: 100%; display: block;">
      <div class="card-body">
        <p class="card-text">Kick start your chemistry equations with our specialized course</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 7980</del></small><span class="font-weight-bolder">&#8377 1299</span></p>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
          <a href="#" class="btn btn-danger text-white font-weight-bolder float-right ">Enroll</a>
        </div>               
        </div>
      </div>
    </div>
  </div>

  <div class="ccard col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="img/c4.jpg" alt="Thumbnail [100%x225]" holder-rendered="true" style="height: 225px; width: 100%; display: block;">
      <div class="card-body">
        <p class="card-text">Online drawing and sckeching classes</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 7999</del></small><span class="font-weight-bolder">&#8377 999</span></p>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
          <a href="#" class="btn btn-danger text-white font-weight-bolder float-right ">Enroll</a>
        </div>           
        </div>
      </div>
    </div>
  </div>
  <div class="ccard col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="img/c5.jpg" alt="Thumbnail [100%x225]" holder-rendered="true" style="height: 225px; width: 100%; display: block;">
      <div class="card-body">
        <p class="card-text">Master Coding for Age 6-12</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 26999</del></small><span class="font-weight-bolder">&#8377 12999</span></p>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
            <a href="#" class="btn btn-danger text-white font-weight-bolder float-right ">Enroll</a>
          </div>               
        </div>
      </div>
    </div>
  </div>
  <div class=" ccard col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="img/guitar.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" holder-rendered="true">
      <div class="card-body">
        <p class="card-text">Complete  beginner to advance course on guitar with hands-on practice</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 5999</del></small><span class="font-weight-bolder">&#8377 899</span></p>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
          <a href="coursedetails.php" class="btn btn-danger text-white font-weight-bolder float-right ">Enroll</a>
        </div>               
                          
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <div class="text-center m-2">
    <a href="#" class="btn btn-danger">View All Courses</a>
  </div>
  </div>


<!--end-->

<!--Contact US-->
<?php
include('./contact.php');
?>
<!---
Feedback
<div class="container-fluid mt-5" style="background-color:#008744" id="Feedback">
  <h1 class="text-center testyheading p-4">Student's Feedback</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="owl-carousel" id="testimonial-slider">
        <div class="testimonial">
          <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <div class="pic">
            <img src="" alt="">
          </div>
          <div class="testimonial-prof">
            <h4>Sonam</h4>
            <small>Web Developer</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="testimonials">
  <div class="container">
    <h1>Feedbacks</h1>
    <p class="text-center">hagfewififh  oigiwehfv gevfujkwve igvfihwegvibv igjb ig igisdf </p>
  </div>
</section>
-ENd of feedback--->


<?php
include('./footer.php');
?>