
  <!-- Modal -->
<div id="stuRegForm">
  <div class="modal fade" id="stuRegModel" tabindex="-1" aria-labelledby="stuRegModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModelLabel">Student Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!--Start of registration from--->
        <form>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label> <small id="statusMsg1"></small>
            <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name"><br>
            <i class="fas fa-envelope-open"></i><label for="stumail" class="pl-2 font-weight-bold">Email</label> <small id="statusMsg2"></small>
            <input type="email" class="form-control" id="stumail" name="stumail" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Create A Password</label> <small id="statusMsg3"></small>
            <input type="password" class="form-control" name="stupass" id="stupass" placeholder="Password" autocomplete="on">
          </div>
        </form>
        <!----end of form---->
          <button type="submit" class="btn btn-primary" onClick="addStu()">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <span id="successMsg"></span>
        </div>
      </div>
    </div>
  </div>
</div>