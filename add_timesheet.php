<?php      
    include('connection.php');      
    $x = 1;
    for ($x = 1; $x <= 15; $x++) {
        $date = 'date'.$x;
        $s_time = 's_time'.$x;
        $e_time = 'e_time'.$x;
        $emp = 'emp'.$x;
        $hrs = 'hrs'.$x;

        if(!empty($_POST[$date])){
            $sql = "INSERT INTO timesheet (date, shift_start_time, shift_end_time, emp_name, hrs) 
            VALUES ('$_POST[$date]','$_POST[$s_time]','$_POST[$e_time]','$_POST[$emp]','$_POST[$hrs]')";
            
        if ($con->query($sql) === TRUE) {
                  } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
        }
    }
    header("Location: create_timesheet.php");
?>  