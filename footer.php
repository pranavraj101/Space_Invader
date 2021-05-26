

<!--Start of About us=-->
<div class="container-fluid" style="background-color:#D62D20;">
  <div class="row text-white text-center">
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>&nbsp;WhatsApp</a>
    </div>
  </div>

</div>
<!--End social Follow-->

<!--Start about section-->
<div class="container-fluid text-white" style="background-color:#081B37;">
<div class="container">
<br><br>
  <div class="row text-center">
    <div class="col-sm">
      <h5>About Us</h5>
      <p>At Space Invader, our mission is to continuously innovate the best ways to train the next generation of developers and to transform the the way tech education is delivered.</p>
    </div>
    <div class="col-sm">
      <h5>Category</h5>
      <a href="#">Web Development</a> <br>
      <a href="#">Web Designing</a> <br>
      <a href="#">Android App Dev</a> <br>
      <a href="#">iOS Development</a> <br>
      <a href="#">Data Analysis</a> <br><br><br><br>
    </div>
    <div class="col-sm">
      <h5>Contact Us</h5>
      <p>Space Invader <br> Vellore Institute of Technology <br> Kelambakkam, Chennai <br> Tamil Nadu</p>
    </div>
  </div>
</div>
</div>

<!--end about-->

<!--Start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">
    Copyright &copy; 2021 || Designed By Space Invader || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModel">Admin login</a> 
  </small>
</footer>

<!----end footer---->

<!---Student Registration form start-->
<?php include('studentRegistration.php'); ?>
<!---Student Registration form ends-->


<!---Student Login form start-->

  <!-- Modal -->
  <div class="modal fade" id="stuLoginModel" tabindex="-1" aria-labelledby="stuLoginModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModelLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!--Start of registration from--->
        <form id="stuLoginForm"> 
          <div class="form-group">
            <i class="fas fa-envelope-open"></i><label for="stuLogmail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuLogmail" name="stuLogmail" placeholder="Email">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" name="stuLogpass" id="stuLogpass" placeholder="Password" autocomplete="on">
          </div>
        </form>
        <!----end of form---->
        </div>
        <div class="modal-footer">
          <small id ="statusLogMsg"></small>
          <button type="submit" class="btn btn-primary" id="stuLoginbtn" onclick="checkStuLogin()">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<!---Student Login form ends-->
<!---Admin Login form start-->

  <!-- Modal -->
  <div class="modal fade" id="adminLoginModel" tabindex="-1" aria-labelledby="adminLoginModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModelLabel">Admin Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!--Start of registration from--->
        <form id="adminLoginForm"> 
          <div class="form-group">
            <i class="fas fa-envelope-open"></i><label for="adminLogmail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="adminLogmail" name="adminLogmail" placeholder="Email">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" name="adminLogpass" id="adminLogpass" placeholder="Password" autocomplete="on">
          </div>
        </form>
        <!----end of form---->
        </div>
        <div class="modal-footer">
          <span id="statusAdminLogMsg"></span>
          <button type="submit" class="btn btn-primary" id="adminLoginbtn" onClick="checkAdminLogin()">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<!---Admin Login form ends-->






    <!--JQuery and Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    <!--Jquery and Bootstrap JavaScript-->
    <script src="js/all.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!--Owl-->
    <script language="JavaScript" type="text/javascript" src="js/ajaxrequest.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/adminajaxrequest.js"></script>

</body>
</html> 