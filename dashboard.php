<!DOCTYPE html>

<?php
    require'connection.php';
	
    session_start();
	if(!ISSET($_SESSION['id'])){
		header('location:index.php');
	}
        $query = mysqli_query($con, "SELECT * FROM `sign_up` WHERE `id`='$_SESSION[id]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        $id = $fetch['id'];
        $f_name = $fetch['f_name'];
        $l_name = $fetch['l_name'];
        $full_name = $f_name . " " . $l_name;
        $username = $fetch['username'];
        $password = $fetch['password'];
        $phone = $fetch['phone'];
        $email = $fetch['email'];
        $address = $fetch['address'];
        $license = $fetch['license'];
        $expiry = $fetch['expiry'];
        $status = $fetch['status'];
        $position = $fetch['position'];
        // if($status == 1){
        //     echo "admin";
        // }
        // else{
        //     echo "emp";
        // }

        

?>

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

<?php

if($position == 1){
    include 'admin_nav.php';
?>

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
<?php
}
else{
    include 'emp_nav.php';
?>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <h1 class="text-uppercase text-center">Dashboard</h1>
                    <!-- <p>Statistics on minimal cards with Title &amp; Sub Title.</p> -->
                </div>
            </div>
            <div class="container col-5">
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Employee Number</span>
                <input value="<?php echo $id; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Full Name</span>
                <input value="<?php echo $full_name; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Phone</span>
                <input value="<?php echo $phone; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Email ID</span>
                <input value="<?php echo $email; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Address</span>
                <input value="<?php echo $address; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">License No</span>
                <input value="<?php echo $license; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-4" id="basic-addon1">Expiry Date</span>
                <input value="<?php echo $expiry; ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly />
            </div>
        </div>
        </section>
    </div>
<?php
}

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</body>

</html>