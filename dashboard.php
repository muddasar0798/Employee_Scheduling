<?php
session_start();
       include('connection.php');  
    //    $username = $_POST['username'];  
    //    $password = $_POST['password'];  
         
    //        //to prevent from mysqli injection  
    //        $username = stripcslashes($username);  
    //        $password = stripcslashes($password);  
    //        $username = mysqli_real_escape_string($con, $username);  
    //        $password = mysqli_real_escape_string($con, $password);  
         
        //    $sql = "select * from login where username = '$username' AND password = '$password' AND status ='1'";  
        //    $result = mysqli_query($con, $sql);  
        //    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //    $count = mysqli_num_rows($result);  
           
           $sql="select * from login where username = '$username' AND password = '$password' AND status ='1'";
            $result = mysqli_query($con,$sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $variable = $row["variable"];
                    $$variable = $row["value"];

                    echo("Name: " . ${variable} . " Value: " . $$variable . "<br>");
                    exit();
                }
            }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gardwell Security</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Gradwell Security</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Dashboard</a>
                    <a href="#" class="nav-item nav-link">Timesheet</a>
                    <a href="#" class="nav-item nav-link">Employees</a>
                    <a href="#" class="nav-item nav-link">Sites</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">Messages</a>
                    <!-- <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a> -->
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <section>
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <h1 class="text-uppercase text-center">Dashboard</h1>
                    <!-- <p>Statistics on minimal cards with Title &amp; Sub Title.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <!-- <i class="fas fa-pencil-alt text-info fa-3x me-4"></i> -->
                                        <i class="far fa-user text-info fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Total Employees</h4>
                                        <!-- <p class="mb-0">Monthly blog posts</p> -->
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <h2 class="h1 mb-0">8</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <!-- <i class="far fa-comment-alt text-warning fa-3x me-4"></i> -->
                                        <i class="fas fa-map-signs text-danger fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Total Sites</h4>
                                        <!-- <p class="mb-0">Monthly blog posts</p> -->
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <h2 class="h1 mb-0">2</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</body>

</html>