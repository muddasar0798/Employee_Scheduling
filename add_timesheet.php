<?php      
    include('connection.php');      
    
    
    $x = 1;
    for ($x = 1; $x <= 45; $x++) {
        $date = 'date'.$x;
        $s_time = 's_time'.$x;
        $e_time = 'e_time'.$x;
        $emp = 'emp'.$x;
        $hrs = 'hrs'.$x;

        if(!empty($_POST[$s_time])){
            $sql = "INSERT INTO timesheet (date, shift_start_time, shift_end_time, emp_name, hrs) 
            VALUES ('$_POST[$date]','$_POST[$s_time]','$_POST[$e_time]','$_POST[$emp]','$_POST[$hrs]')";

        if ($con->query($sql) === TRUE) {

                  } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
        }
    }

    // $i = 1;
    // for ($i = 1; $i <= 15; $i++) {
    //     $date = 'date'.$i;
    //     if(!empty($_POST[$date])){

    //         $sql1 = "INSERT INTO timesheet_dates (date) 
    //         VALUES ('$_POST[$date]')";
            
    //         if ($con->query($sql1) === TRUE) {
    //                   } else {
    //             echo "Error: " . $sql . "<br>" . $con->error;
    //           }
                  
    //     }
    // }
    header("Location: create_timesheet.php");
?>  