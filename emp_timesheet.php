<?php
    require'connection.php';
    session_start();
    $sql = "SELECT * FROM (
        SELECT * FROM timesheet ORDER BY id DESC LIMIT 45
     )Var1
        ORDER BY id ASC;";
    $result = $con->query($sql);
    $con->close();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Timesheet</title>
</head>

<body>

<?php
    include 'emp_nav.php';
?>

<div class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-2">
                <h1 class="text-uppercase text-center">Timesheet</h1>
                <!-- <p>Statistics on minimal cards with Title &amp; Sub Title.</p> -->
            </div>
        </div>
    <hr>
</div>
<h1>Under Construction</h1>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>


</body>

</html>