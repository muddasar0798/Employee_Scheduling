<table>
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