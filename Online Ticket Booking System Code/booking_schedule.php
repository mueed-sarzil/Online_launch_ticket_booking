<?php 
//include('shserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from schedule";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers" >
				<h1>Schedule Information</h1>
				<tr>
					<th>Launch Name</th>
					<th>Route</th>
					<th>Date</th>
					<th>Time</th>
					<th>port</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['launchname']; ?></td>
					<td><?php echo $data['route']; ?></td>
					<td><?php echo $data['launchdate']; ?></td>
					<td><?php echo $data['launchtime']; ?></td>
					<td><?php echo $data['portname']; ?></td>
					
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
