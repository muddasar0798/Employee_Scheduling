
<?php
	require_once 'connection.php';
	session_start();
	if(ISSET($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($con, $username);  
        // $password = mysqli_real_escape_string($con, $password);  
 
		$query = mysqli_query($con, "select * from sign_up where username = '$username' AND password = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
 
		if($row > 0){
			$_SESSION['id']=$fetch['id'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='dashboard.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='index.php'</script>";
		}
 
	}
 
?>

<!-- <!?php      
    // include('connection.php');  
    require_once 'connection.php';
    session_start();
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from login where username = '$username' AND password = '$password' AND status ='1'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            header("Location: dashboard.php");
            exit();
            
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>   -->