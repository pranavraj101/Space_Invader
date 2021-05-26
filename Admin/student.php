<?php
include('./admininclude/header.php');
include('../dbConnection.php');
?>
<?php
$sql="SELECT * FROM student1";
$result=$conn->query($sql);
if($result->num_rows>0)


{ ?>
<div class="mt-5 col-sm-9">
    <p class="p-2 text-white bg-dark">List of Student</p>
    <table class="table">
        <thead>
            <th scope="col">Student ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        echo '<tr>';
        echo '<th scope="row">'.$row['stu_id'].'</th>';
        echo '<td>'.$row['stu_name'].'</td>';
        echo '<td>'.$row['stu_email'].'</td>';
        echo '<td>';
        echo '
                <form action="editstudent.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row['stu_id'].'>
                <button
                type="submit"
                class="btn btn-info mr-3"
                name="view"
                value="View"><i class="fas fa-pen"></i></button></form>';
                echo '<form action="" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row['stu_id'].'>
                <button
                type="submit"
                class="btn btn-secondary"
                name="delete"
                value="Delete"><i class="fas fa-trash-alt"></i></button></form>';
                echo '</td>';
                echo '</tr>';
         } ?>
        </tbody>
    </table>
</div>
<?php }
else{
    echo "0 result";
}


if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM student1 WHERE stu_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted/>';
    }
    else{
        echo"UNABLE TO DELETE DATA";
    }
}
?>



<div>
    <a href="./addnewstudent.php" class="btn btn-danger box">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>




<?php
include('./admininclude/footer.php');
?>