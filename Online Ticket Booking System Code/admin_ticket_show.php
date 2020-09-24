<?php 
include('admin_ticket_server.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from ticket";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Ticket</h1>
				<tr>
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Journy Date</th>
					<th>Launch Name</th>
					<th>Class</th>
					<th>Number of cabin</th>
					<th>Cabin No</th>
					<th>Broading</th>
					<th>Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['uname']; ?></td>
					
					<td><?php echo $data['umobile']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['gender']; ?></td>
					<td><?php echo $data['lname']; ?></td>
					<td><?php echo $data['cabclass']; ?></td>
					<td><?php echo $data['number']; ?></td>
					<td><?php echo $data['cabnum']; ?></td>
					<td><?php echo $data['broading']; ?></td>
					<td><a class="button" href="admin_ticket_server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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