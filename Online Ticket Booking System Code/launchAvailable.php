<html>

<?php
	if(isset($_POST['search']))
	{
		
	}
	
?>
	<head>
		<title>Ticket Details|ticket.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
		.button {
		    background-color: green;
		    border: none;
		    color: white;
		    padding: 5px 60px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}
		.error
		{
			color:red;
		}
		</style>
	</head>
	<body>
	
		
		<form target="_top">
		<table  border="1" width="1325" height="1340">
			<a href="ticket.php">Home</a>
		<tr height="100">
			<td>
			<table border="0" align="center">
				<tr>
					
					<td>
						<img src="logoproject.jpg" width="250"><br/>
						<h1>Booking Information</h1>
					</td>
					
				</tr>
				
			</table>
			</td>
		</tr>
			<tr>
			 <td>
				<table>
				<tr>
					<td class="mid">
						
						<iframe width="1325" height="1340" name="myframe" src="show_booking_schedule.php" frameborder="0"> </iframe>
					</td>
					</tr>
				</table>
				</td>
			</tr>
			
				<tr height="50">
					<td >
						<table align="center">
							<tr>
							<td>
							     <h3>Copyright@2018</h3>
							</td>
							</tr>
						</table>
					</td>
				</tr>
			
			</td>
			</tr>
			</table>
		</form>
	</body>
</html>