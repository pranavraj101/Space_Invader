<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <link rel="stylesheet" href="../css/adminstyle.css">
    
    <!--bootstrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--font awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!---Google Font---->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">

</head>
<body>
    


    <!--Nav bar--->

    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #0057E7">
        <a href="#" class="navbar-brand col-sm-3 col-md-3 mr-0">i S p a c e <br> <small class="text-white">&nbsp;&nbsp;Admin Area</small></a>
    </nav>

    <!----Side Bar--->
    <div class=" container-fluid mb-5" style="margin-top:40px">
        <div class="row">
            <nav class="sidebar col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="color: #FFA700 !important">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="adminDashboard.php" class="nav-link">
                                <i class=" fas fa-tachometer-alt"></i>&nbsp;Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="courses.php" class="nav-link">
                                <i class=" fas fa-accessibblrr-alt"></i>&nbsp;Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lesson.php" class="nav-link">
                                <i class=" fas fa-accessible-alt"></i>&nbsp;Lessons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="student.php" class="nav-link">
                                <i class=" fas fa-users"></i>&nbsp;Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class=" fas fa-table"></i>&nbsp;Sell Report
                            </a>
                        </li><li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class=" fas fa-table"></i>&nbsp;Payment Status
                            </a>
                        </li><li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class=" fas fa-table"></i>&nbsp;Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class=" fas fa-sign-out-alt"></i>&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>