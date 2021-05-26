<?php
include('./admininclude/header.php');
include('../dbConnection.php');
?>
<?php
$sql="SELECT * FROM course";
$result=$conn->query($sql);
if($result->num_rows>0)


{ ?>
<div class="mt-5 col-sm-9">
    <p class="p-2 text-white bg-dark">List of courses</p>
    <table class="table">
        <thead>
            <th scope="col">Course ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        echo '<tr>';
        echo '<th scope="row">'.$row['course_id'].'</th>';
        echo '<td>'.$row['course_name'].'</td>';
        echo '<td>'.$row['course_author'].'</td>';
        echo '<td>';
        echo '
                <form action="editcourse.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row['course_id'].'>
                <button
                type="submit"
                class="btn btn-info mr-3"
                name="view"
                value="View"><i class="fas fa-pen"></i></button></form>';
                echo '<form action="" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row['course_id'].'>
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
    $sql="DELETE FROM course WHERE course_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted/>';
    }
    else{
        echo"UNABLE TO DELETE DATA";
    }
}
?>



<div>
    <a href="./addCourse.php" class="btn btn-danger box">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>




<?php
include('./admininclude/footer.php');
?>