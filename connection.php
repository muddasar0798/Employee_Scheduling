<?php  

	// $con = mysqli_connect("localhost", "root", "", "db_user_login");
 
	// if(!$con){
	// 	die("Error: Failed to connect to database!");
	// }

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "emp_scheduling";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  