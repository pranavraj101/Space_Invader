<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])==true){
    $adminEmail=$_SESSION['adminLogEmail'];
}
else{
    echo "<script>location.href='../index.php'; </script>";
}

if(isset($_REQUEST['newStuSubmitBtn'])){
    if(($_REQUEST['stu_name']=="")||($_REQUEST['stu_email']=="")||($_REQUEST['stu_pass']=="")||($_REQUEST['stu_occ']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Fields</div>';}
    
else
{
    $stu_name=$_REQUEST['stu_name'];
    $stu_email=$_REQUEST['stu_email'];
    $stu_pass=$_REQUEST['stu_pass'];
    $stu_occ=$_REQUEST['stu_occ'];

    $sql="INSERT into student1 (stu_name,stu_email,stu_pass,stu_occ) values ('$stu_name','$stu_email','$stu_pass','$stu_occ') ";

    if($conn->query($sql) == TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">student Added</div>';
    }
    else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add stus</div>';
    }

}
}
?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-centre">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class=" form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <textarea class="form-control" name="stu_email" id="stu_email" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class=" form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class=" form-control" id="stu_occ" name="stu_occ">
        </div>
        <div class="text-centre">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
            <?php if(isset($msg)){echo $msg;} ?>
        </div>
    </form>
</div>


<?php
include('./admininclude/footer.php');
?>