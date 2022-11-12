<!-- PHP code to establish connection with the localserver -->
<?php

include('connection.php');  

// SQL query to select data from database
// $sql = " SELECT * FROM userdata ORDER BY score DESC ";
$sql = "SELECT * FROM emp_details";
$result = $con->query($sql);
$con->close();
?>
<!-- HTML code to display data in tabular format -->
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
    <!-- <link rel="stylesheet" href="style.css">	<title>GFG User Details</title> -->
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			display: inline-block;
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		.heading{
			margin: 20px 557px;
		}
	</style>
</head>

<body>
	<section>
		<form action="logout.php">
		<div class="heading">
		<h1>Employees Summary</h1>
		<button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Logout</button>		
	</div>
	</form>
		<!-- TABLE CONSTRUCTION -->
		<div class="container table-responsive">
        <table class="table table-hover">
		<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th>Action</th>
				<th>Status</th>
				<!-- <th>btn</th> -->
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
			<form action="status_upd.php" method="post">
				<td><input type="text" name="id" id="id" value="<?php echo $rows['id'];?>"></td>
				<td><?php echo $rows['f_name'];?></td>
				<td><?php echo $rows['l_name'];?></td>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><input type="text" name="status" id="status" value="<?php echo $rows['status'];?>"></td>
				<!-- <td><input type="checkbox" name="formWheelchair" value="Yes" /></td> -->
				<td><input type="submit" name="formSubmit" value="<?php if ($rows['status'] == 0){echo "Not Approved";}else{echo "Approved";}?>" /></td></form>
			</tr>
			<?php
				}
			?>
        </table>
    </div>

		
	</section>
</body>

</html>
