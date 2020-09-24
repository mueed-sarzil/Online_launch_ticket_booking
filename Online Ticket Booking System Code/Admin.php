<?php
session_start();
?>
<html>
	<head>
	<title>Admin|Ticket.com</title>
	<style>
	h1{color: orange;}
	h2{color:red;}
	body {background-image: url("back3.jpg");
				 height: 130%;
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
				    padding: 5px 70px;
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
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.error{color:red;}
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
   			<a href="user_schedule.php">Schedule</a>
			<a href="launch.php">Launch Details</a>
  			<a href="user_news.php">News</a>
 		     <a href="about.php">About</a>
 			 <a href="contact.php">Contact</a>
		</div><hr/>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
			<table align="center">
				<tr>
					<td>
						<fieldset>
							<div align="center">
								<img src="logoproject.jpg" alt="logo" width="200">
							</div>
							<legend><h2>Admin</h2></legend>
							<table width="500" height="100">
								<tr>
									<td><label><b>Username:</b></label></td>
									<td><input class="div"type="text" placeholder="Enter Username" name="uname" required="" >
									
									</td>
									
								</tr>
								<tr>
									<td><label><b>Password:</b></label></td>
									<td><input class="div"type="Password" placeholder="Enter password" name="pass" required="" ></td>
									
								</tr>
						   </table><hr/>
						   <div>
						   	
							<input class="button" type="submit" value="Login" name="submit"><br/>
							
						    <span class="psw" align="right">Forgot <a href="admin_forget_pass.php">password?</a></span>
							
							</div>
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$con=mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());
		}
		else
		{
			$sql="select * from admin where username='".$_POST['uname']."'and password='".$_POST['pass']."';";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['name']=$row['username'];
				header("location:adminpanel.php");
			}
			else
			{
				echo "please Enter valid username & Password";
			}
		}
	}
?>
