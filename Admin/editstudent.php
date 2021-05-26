<?php
include('./admininclude/header.php');
include('../dbConnection.php');


if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['stu_id']=="")||($_REQUEST['stu_name']=="")||($_REQUEST['stu_email']=="")||($_REQUEST['stu_occ']=="")||($_REQUEST['stu_pass']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Fields</div>';}
    
else
{
    $cid=$_REQUEST['stu_id'];
    $cname=$_REQUEST['stu_name'];
    $cemail=$_REQUEST['stu_email'];
    $cocc=$_REQUEST['stu_occ'];
    $cpass=$_REQUEST['stu_pass'];
    

    $sql="UPDATE student1 SET stu_id ='$cid',stu_id ='$cid',stu_name ='$cname',stu_occ ='$cocc',stu_pass ='$cpass' WHERE stu_id = '$cid' ";

    if($conn->query($sql) == TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Details Updated</div>';
    }
    else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update Student Status</div>';
    }

}
}


?>




<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-centre">Update Student Details</h3>
    <?php
        if(isset($_REQUEST['view'])){
            $sql="SELECT * FROM student1 Where stu_id={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
        }

    ?>


    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="stu_id">Student Id</label>
            <input type="text" class=" form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])){
                echo $row['stu_id'];}  ?>"readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class=" form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])){
                echo $row['stu_name'];}  ?>">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class=" form-control" id="stu_email" name="stu_email"  value="<?php if(isset($row['stu_email'])){
                echo $row['stu_email'];}  ?>">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class=" form-control" id="stu_pass"xx name="stu_pass"  value="<?php if(isset($row['stu_pass'])){
                echo $row['stu_pass'];}  ?>">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class=" form-control" id="stu_occ" name="stu_occ"  value="<?php if(isset($row['stu_occ'])){
                echo $row['stu_occ'];}  ?>">
        </div>
        
        <div class="text-centre">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
            <?php if(isset($msg)){echo $msg;} ?>
        </div>
    </form>
</div>




<?php
include('./admininclude/footer.php');
?>