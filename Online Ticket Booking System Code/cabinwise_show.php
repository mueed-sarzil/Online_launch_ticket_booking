<?php 
//include('shserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from cabininfo";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Cabin Wise Seat Availability:</h1>
				<tr>
					<th>Launch Name</th>
					<th>Cabin</th>
					<th>Seats</th>
					<th>Cabin Fare</th>
					<th>Status</th>
					<th>Total Cabin</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['launchname']; ?></td>
					<td><?php echo $data['cclass']; ?></td>
					<td><?php echo $data['seatno']; ?></td>
					<td><?php echo $data['fare']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td><?php echo $data['cabinno']; ?></td>
					
				</tr>
				<?php 
			}
			?>
			</table>
			<?php
		}
		
		else
		{
			echo "Error!!!";
		}
	}
?>