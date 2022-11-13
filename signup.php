<?php      
    include('connection.php');  
    $f_name = $_POST['f_name'];  
    $l_name = $_POST['l_name'];  
    $username = $_POST['modal_username'];  
    $password = $_POST['modal_password'];  
    $phone = $_POST['phone'];  
    $email = $_POST['email'];  
    $address = $_POST['address'];  
    $license = $_POST['license'];  
    $expiry = $_POST['expiry'];  
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($con, $username);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        // $sql = "select * from login where username = '$username' and password = '$password'";  
        // $sql = INSERT INTO `sign_up`(`f_name`, `l_name`, `username`, `address`) 
        //         VALUES ('f_name','l_name','username','address');

        $sql = "INSERT INTO sign_up (f_name, l_name, username, password, phone, email, address, license, expiry)
        VALUES ('$f_name','$l_name','$username','$password','$phone', '$email', '$address', '$license','$expiry')";

        // $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        // if($count == 1){  
        //     echo "<h1><center> Insered </center></h1>";  
        // }  
        // else{  
        //     echo "<h1> Not inserted </h1>";  
        // }     

        if ($con->query($sql) === TRUE) {
            header("Location: index.html");
            exit();
                  } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
?>  