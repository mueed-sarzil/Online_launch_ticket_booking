<html>
	<head>
	<title>Online|Ticket.com</title>
	<style>
	h1{color: orange;}
	h3{color:blue;}
	body { background-image: url("back3.jpg");
				 height: 150%;
				  background-size: cover;
				background-repeat: no-repeat;}
	.topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.button {
				    background-color: blue;
				    border: none;
				    color: white;
				    padding: 10px 60px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 4px 2px;
				    cursor: pointer;
				    border-radius: 5px;
				}
				.div {
    border-style: solid;
    border-color: #92a8d1;
		}
	input[type=text] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
	</style>
	</head>
	<body>
	<table>
			<tr>
				<td>
				<img src="logoproject.jpg" alt="Logo" width="150" >
			</td>
		    <td><h1>Ticket.com</h1></td>
		   
		</tr>
		<tr>
			 <td>Help Line:</td>
		    <td>01632099410</td>
		</tr>
       </table><hr/>
	   
	   <div class="topnav">
  			<a class="active" href="index.php">Home</a>
			<a href="ticket.php">Ticket</a>
  			<a href="login.php">Login</a>
  			<a href="Registration.php">Register</a>
			<a href="Admin.php">Admin</a>
   			<a href="schedule.php">Schedule</a>
			<a href="launch.php">Launch Details</a>
  			<a href="News.php">News</a>
  			<a href="print_ticket.php">Ticket Print</a>
  			<a href="cancel_ticket.php">Cancel Ticket</a>
 		    <a href="about.php">About</a>
 			 <a href="contact.php">Contact</a>
		</div><hr/>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table align="center">
				<tr>
					<td>
						<fieldset>
						<div align="center">
								<img src="logoproject.jpg" alt="logo" height="200">
							</div>
							<legend><h1>Online Booking</h1></legend>
							<table width="500" height="100">
								<tr>
									<td><label><h3>From:</h3></label></td>
									<td><input class="div"type="text" name="from" placeholder="Enter City" required="" size="20"></td>
								</tr>
								<tr>
							
									<td><label><h3>To:</h3></label></td>
									<td><input class="div"type="text" name="go" placeholder="Enter City" required=""></td>
								</tr>
								<tr>
									<td><h3>Date of journey:</h3></td>
									<td><input type="date" name="jdate"required="" ></td>
								</tr>
						   </table><hr/>
						   <input class="button" type="submit" value="Search" name="search">
							
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>
<?php
	if(isset($_POST['search']))
	{
		$con=mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());
		}
		else
		{
			$sql="select * from schedule where portname='".$_POST['from']."'and launchdate='".$_POST['jdate']."';";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				
				header("location:launchAvailable.php");
			}
			else
			{
				echo "No launch this day..!";
			}
		}
	}
	
?>