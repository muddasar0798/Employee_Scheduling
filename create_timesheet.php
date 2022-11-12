<?php

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
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-2">
                <h1 class="text-uppercase text-center">Create Timesheet</h1>
                <!-- <p>Statistics on minimal cards with Title &amp; Sub Title.</p> -->
            </div>
            <div class="col-2 mt-3 mb-2">
            <select id="time_period" name="time_period" onchange="set_dates()" 
            class="form-select form-control-lg" aria-label="Default select example">
                <option selected>Select Period</option>
                <option value="1">Nov1</option>
                <option value="2">Nov16</option>
            </select>
            </div>
        </div>
        <hr>
    </div>
<form action="add_timesheet.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <input type="text" placeholder="Date" class="form-control mb-1" id="date1" name="date1">
                <input type="text" placeholder="Date" class="form-control mb-1" id="date2" name="date2">
                <input type="text" placeholder="Date" class="form-control mb-1" id="date3" name="date3">    
            </div>
            <div class="col-auto">
                <input type="text" placeholder="Start Time" class="form-control mb-1" id="s_time1" name="s_time1">
                <input type="text" placeholder="Start Time" class="form-control mb-1" id="s_time2" name="s_time2">
                <input type="text" placeholder="Start Time" class="form-control mb-1" id="s_time3" name="s_time3">    
            </div>
            <div class="col-auto">
                <input type="text" placeholder="End Time" class="form-control mb-1" id="e_time1" name="e_time1">
                <input type="text" placeholder="End Time" class="form-control mb-1" id="e_time2" name="e_time1">
                <input type="text" placeholder="End Time" class="form-control mb-1" id="e_time3" name="e_time1">    
            </div>
            <div class="col-auto">
            <select name="emp1"class="form-select form-control mb-1">
                    <option selected>Select</option>
                    <option value="1">Smita</option>
                    <option value="2">Mohammed</option>
                    <option value="3">Tawfiq</option>
                    <option value="4">Sagar</option>
                    <option value="5">Arpan</option>
                    <option value="6">Sharif</option>
                    <option value="7">Dinesh</option>
                </select>
                <select name="emp1"class="form-select form-control mb-1">
                    <option selected>Select</option>
                    <option value="1">Smita</option>
                    <option value="2">Mohammed</option>
                    <option value="3">Tawfiq</option>
                    <option value="4">Sagar</option>
                    <option value="5">Arpan</option>
                    <option value="6">Sharif</option>
                    <option value="7">Dinesh</option>
                </select>
                <select name="emp1"class="form-select form-control mb-1">
                    <option selected>Select</option>
                    <option value="1">Smita</option>
                    <option value="2">Mohammed</option>
                    <option value="3">Tawfiq</option>
                    <option value="4">Sagar</option>
                    <option value="5">Arpan</option>
                    <option value="6">Sharif</option>
                    <option value="7">Dinesh</option>
                </select>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="Hours" class="form-control mb-1" id="hrs1" name="hrs1">
                <input type="text" placeholder="Hours" class="form-control mb-1" id="hrs2" name="hrs2">
                <input type="text" placeholder="Hours" class="form-control mb-1" id="hrs3" name="hrs3">    
            </div>
        </div>
    <hr>
        <div class="row mt-2">
            <button type="submit" class="btn btn-primary mb-3">Add</button>
        </div>
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

<script>

function set_dates(){
    let first_period = document.getElementById("time_period").value;
    // let date = document.getElementById("date1").value;
    if(first_period == 1){
        document.getElementById("date1").value = '2022-11-01';
        document.getElementById("date2").value = '2022-11-01';
        document.getElementById("date3").value = '2022-11-01';
        document.getElementById("s_time1").value = '22:30';
        document.getElementById("s_time2").value = '06:30';
        document.getElementById("s_time3").value = '14:30';
        document.getElementById("e_time1").value = '06:30';
        document.getElementById("e_time2").value = '14:30';
        document.getElementById("e_time3").value = '22:30';
        document.getElementById("hrs1").value = '8';
        document.getElementById("hrs2").value = '8';
        document.getElementById("hrs3").value = '8';
    }
}
function auto_update(){
    let date = document.getElementById("date1").value;
    let date2 = document.getElementById("date2").value;
    document.getElementById("date2").value = date;
    // alert(date);
}
</script>
</body>

</html>