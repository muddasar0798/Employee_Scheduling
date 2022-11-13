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
                <!-- <option value="2">Nov16</option> -->
            </select>
            </div>
        </div>
        <hr>
    </div>
<form action="add_timesheet.php" method="POST">
    <div class="container">
    <div class="row" id="dynamic_row">
            <div class="col-auto" id="dynamic_dates">

            </div>
            <div class="col-auto" id="dynamic_s_time"></div>
            <div class="col-auto" id="dynamic_e_time"></div>
            <div class="col-auto" id="dynamic_emp"></div>
            <div class="col-auto" id="dynamic_hrs"></div>
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
        function set_dates() {
            let dynamic_dates = document.getElementById('dynamic_dates');
            let dynamic_s_time = document.getElementById('dynamic_s_time');
            let dynamic_e_time = document.getElementById('dynamic_e_time');
            let dynamic_emp = document.getElementById('dynamic_emp');
            let dynamic_hrs = document.getElementById('dynamic_hrs');
            let dynamic_row = document.getElementById('dynamic_row');

            
            // Code for dynamic start date, end date, empy and hrs displays starts
            let x = 1;
            for (x = 1; x <= 45; x++) {
                let s_time = 's_time' + x;
                let e_time = 'e_time' + x;
                let emp = 'emp' + x;
                let hrs = 'hrs' + x;
                
                dynamic_s_time.innerHTML +=
                '<input type="text" class="form-control mb-2" id="s_time" name="s_time">';
                document.getElementById("s_time").id = s_time;
                document.getElementById(s_time).setAttribute("name", s_time);
                if(x == 1 || x == 4 || x == 7 || x == 10 || x == 13 || x == 16 || x == 19 || x == 22 || x == 25 || x == 28 || x == 31 || x == 34 || x == 37 || x == 40 || x == 43){
                    document.getElementById(s_time).setAttribute("value", '10:30');
                }
                if(x == 2 || x == 5 || x == 8 || x == 11 || x == 14 || x == 17 || x == 20 || x == 23 || x == 26 || x == 29 || x == 32 || x == 35 || x == 38 || x == 41 || x == 44){
                    document.getElementById(s_time).setAttribute("value", '06:30');
                }
                if(x == 3 || x == 6 || x == 9 || x == 12 || x == 15 || x == 18 || x == 21 || x == 24 || x == 27 || x == 30 || x == 33 || x == 36 || x == 39 || x == 42 || x == 45){
                    document.getElementById(s_time).setAttribute("value", '02:30');
                }
                
                dynamic_e_time.innerHTML +=
                '<input type="text" class="form-control mb-2" id="e_time" name="e_time">';
                document.getElementById("e_time").id = e_time;
                document.getElementById(e_time).setAttribute("name", e_time);
                if(x == 1 || x == 4 || x == 7 || x == 10 || x == 13 || x == 16 || x == 19 || x == 22 || x == 25 || x == 28 || x == 31 || x == 34 || x == 37 || x == 40 || x == 43){
                    document.getElementById(e_time).setAttribute("value", '06:30');
                }
                if(x == 2 || x == 5 || x == 8 || x == 11 || x == 14 || x == 17 || x == 20 || x == 23 || x == 26 || x == 29 || x == 32 || x == 35 || x == 38 || x == 41 || x == 44){
                    document.getElementById(e_time).setAttribute("value", '02:30');
                }
                if(x == 3 || x == 6 || x == 9 || x == 12 || x == 15 || x == 18 || x == 21 || x == 24 || x == 27 || x == 30 || x == 33 || x == 36 || x == 39 || x == 42 || x == 45){
                    document.getElementById(e_time).setAttribute("value", '10:30');
                }
                
                
                dynamic_emp.innerHTML +=
                '<select id="emp" name="emp" class="form-select form-control mb-2"><option selected>Select</option><option value="1">Smita</option><option value="2">Mohammed</option><option value="3">Tawfiq</option><option value="4">Sagar</option><option value="5">Arpan</option><option value="6">Sharif</option><option value="7">Dinesh</option></select>';
                document.getElementById("emp").id = emp;
                document.getElementById(emp).setAttribute("name", emp);
                
                dynamic_hrs.innerHTML +=
                '<input type="text" class="form-control mb-2" id="hrs" name="hrs">';
                document.getElementById("hrs").id = hrs;
                document.getElementById(hrs).setAttribute("name", hrs);
                document.getElementById(hrs).setAttribute("value", '8');
                if(x == 3 || x == 6 || x == 9 || x == 12 || x == 15 || x == 18 || x == 21 || x == 24 || x == 27 || x == 30 || x == 33 || x == 36 || x == 39 || x == 39 || x == 42 || x == 45){
                    dynamic_s_time.innerHTML += "<hr>";
                    dynamic_e_time.innerHTML += "<hr>";
                    dynamic_emp.innerHTML += "<hr>";
                    dynamic_hrs.innerHTML += "<hr>";
                }
            }
            
            // Code for dynamic start date, end date, empy and hrs displays ends
            
            // Code for dynamic dates displays starts
           let i = 1;
           for (i = 1; i <= 15; i++) {
               let date = 'date' + i;
               dynamic_dates.innerHTML +=
               '<input type="text" class="form-control mb-10" id="date" name="date">';
               document.getElementById("date").id = date;
               document.getElementById(date).setAttribute("name", date);
                document.getElementById(date).setAttribute("value", '2022-11-' + i);
           }
           // Code for dynamic dates displays ends
        }
</script>
</body>

</html>