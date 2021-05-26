<?php
include('./header.php');
?>
<!--Course Banner-->
<div class="container-fluid bg-dark cbanner">
    <div class="row">
        <img src="img/courses.jpg" alt="courses" style=" width:100%; object-fit:cover; ">
    </div>
</div>
<!--ENd Course banner-->

<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
    <div class="form-group row">
        <label class=" col-sm-3 col-form-label">Order ID:</label>
        <div class="col-sm-3">
            <input type="text" class="form-control mx-3">
        </div>
        <div>
            <input type="submit" class=" btn btn-primary mx-4" value="View">
        </div>
    </div>

    </form>
</div>


<?php
include('./contact.php');
?>
<br>
<?php
include('./footer.php');
?>