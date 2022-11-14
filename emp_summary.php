<!-- PHP code to establish connection with the localserver -->
<?php
    require'connection.php';
	
    session_start();

// SQL query to select data from database
// $sql = " SELECT * FROM userdata ORDER BY score DESC ";
$sql = "SELECT * FROM sign_up";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	
<?php
    include 'admin_nav.php';
?>

<div class="container">
		<section>
                <div class="row">
                    <div class="col-12 mt-3 mb-3">
                        <h1 class="text-uppercase text-center">Employees Summary</h1>
                        <!-- <p>Statistics on minimal cards with Title &amp; Sub Title.</p> -->
                    </div>
                </div>
</section>
</div>
		<!-- TABLE CONSTRUCTION -->
		<section>
		<div class="container table-responsive">
        <table class="table table-hover">
		<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th class="d-none">Action</th>
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
				<td><input style="border:none; width:20px" type="text" name="id" id="id" value="<?php echo $rows['id'];?>"></td>
				<td><?php echo $rows['f_name'];?></td>
				<td><?php echo $rows['l_name'];?></td>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td class="d-none"><input type="text" name="status" id="status" value="<?php echo $rows['status'];?>"></td>
				<!-- <td><input type="checkbox" name="formWheelchair" value="Yes" /></td> -->
				<td><input type="submit" name="formSubmit" value="<?php if ($rows['status'] == 0){echo "Not Approved";}else{echo "Approved";}?>" /></td></form>
			</tr>
			<?php
				}
			?>
        </table>
    </div>

		
	</section>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</body>

</html>
