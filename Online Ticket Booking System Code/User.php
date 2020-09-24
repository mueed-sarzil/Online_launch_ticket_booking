<?php
session_start();
if(isset($_SESSION['email']))
{
	
}
else
{
	header("location:login.php");
}
?>
<html>

	<head>
		<title>UserPanel|ticket.com</title>
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
		</style>
	</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div align=" right">
			<input type="submit" name="logout" value="Logout" class="button"/>
			<?php
				if(isset($_POST["logout"]))
				{
					session_destroy();
					header("Location:login.php");
				}
			?>
		</div>
	<table border="1"width="1340" height="900">
		<tr>
			<td class="header">
				<div align="center">
		  <img src="logoproject.jpg" alt="Logo" width="150" >
			<h1>User Panel</h1>
		  </div>
				
			</td>
		</tr>
		<tr>
			<td align= 'center' class="midBody">
				<fieldset>
					<legend>Account</legend>
					<div>
						<a class="button" href="edit_userprofile.php" target="myIframe">Profile</a>
						<a class="button" href="statement.php" target="myIframe">Statement</a>
						<a  class="button"href="ticketprint.php" target="myIframe">Ticket</a>
						<a class="button"href="ticket.php" target="myIframe">Booking</a>
						
					</div>

				</fieldset>
				<iframe name="myIframe" frameborder="0" src="edit_userprofile.php" width="1340" height="900"></iframe>
			</td>
		</tr>
		<tr>
			<td class="footer" align="center">
				Copyright © 2018
			</td>
		</tr>
	</table>
</form>
	</body>
</html>
