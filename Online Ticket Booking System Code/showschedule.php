
<?php 
include('shserver.php');
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
				<tr>
					<th>Launch Name</th>
					<th>Route</th>
					<th>Date</th>
					<th>Time</th>
					<th>port</th>
					<th colspan="2">Action</th>
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
					
					<td><a class="button1" href="edit_schedule.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button2" href="shserver.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
