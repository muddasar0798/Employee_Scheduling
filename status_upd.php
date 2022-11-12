<?php      
    include('connection.php');  
    $id = $_POST['id']; 
    $status = $_POST['status']; 
    if($status == 1){$status =0;}else{$status =1;}
    // if($status == 0){$status =1;}
    // $status = 0; 
    // echo $id;
    // echo $status;
    // exit(); 

    // $id = 1; 
    // $l_name = $_POST['l_name'];  
    // $username = $_POST['un'];  
    // $address = $_POST['address'];  
    $sql = "UPDATE sign_up SET status='$status' WHERE id='$id'";
    // echo $sql;
    // exit(); 
    
    if ($con->query($sql) === TRUE) {
            header("Location: emp_summary.php");
            exit();
    } else {
    echo "Error updating record: " . $con->error;
    }

?>  