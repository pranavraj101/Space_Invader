<?php
include('./admininclude/header.php');
?>
<div class="mt-5 col-sm-9">
<div class="row mx-5 text-center">
<div class=" col-sm-4 mt-5">
    <div class="card text-white courses mb-3" style="max-width:18rem;  background-color: #D62D20;">
        <div class="card-header">
            Courses
        </div>
        <div class="card-body">
            <h4 class="card-title">
                5
            </h4>
            <a href="#" class="btn text-white">View</a>
        </div>
    </div>
</div>

<div class=" col-sm-4 mt-5">
    <div class="card text-white student mb-3" style="max-width:18rem;  background-color: #008744">
        <div class="card-header">
            Students
        </div>
        <div class="card-body">
            <h4 class="card-title">
                25
            </h4>
            <a href="#" class="btn text-white">View</a>
        </div>
    </div>
</div>

<div class=" col-sm-4 mt-5">
    <div class="card text-white sold mb-3" style="max-width:18rem;  background-color: #FFA700">
        <div class="card-header">
            Sold
        </div>
        <div class="card-body">
            <h4 class="card-title">
                5
            </h4>
            <a href="#" class="btn text-white">View</a>
        </div>
    </div>
</div>

</div>

<div class="mx-5 mt-5 text-center">

<!-----Table--->
<p class="text-white p-2" style=" background-color: #0057E7">Courses Ordered</p>
<table class="table">
    <thead>
        <tr>
            <th class="col">Order ID</th>
            <th class="col">Course ID</th>
            <th class="col">Student Email</th>
            <th class="col">Order Date</th>
            <th class="col">Amount</th>
            <th class="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <th scope="row">22</th>
        <td>100</td>
        <td>hlo@hlo.hlo</td>
        <td>20/10/2020</td>
        <td>2000</td>
        <td><button type="submit" class="btn-secondary btn" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></td>
    </tbody>
</table>

<?php
include('./admininclude/footer.php');
?>