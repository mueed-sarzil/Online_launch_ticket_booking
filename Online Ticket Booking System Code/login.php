<?php
session_start();
?>
<html>
	<head>
	<title>Login|Ticket.com</title>
	<link rel="stylesheet" href="style.css">
	<style>
	h1{color: orange;}
	h3{color:blue;}
	h4{color:white;}
	body {background-image: url("back3.jpg");
				 height: 110%;
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
		
			.login-page{
			width: 450px; 
			background:gray; 
			padding: 10px 10px; 
			box-sizing: border-box; 
			position:relative; 
			left: 50%; 
			top: 35%; 
			transform: translate(-50%, -50%);
			border-radius: 15px;
			}
		h2{
			text-align: center; 
			color: blue; 
			font-weight: normal; 
			margin-bottom: 10px;
			}
		.input{

			width: 100%; 
			background: none; 
			border: 1px solid #fff; 
			border-radius: 3px; 
			padding: 6px 15px; 
			box-sizing: border-box; 
			margin-bottom: 20px; 
			font-size:16px;
			}
		

		
		a:visited {
		        text-decoration: none;
		color: blue;
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
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 130%;
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
   			<a href="user_schedule.php">Schedule</a>
			<a href="launch.php">Launch Details</a>
  			<a href="user_news.php">News</a>
 		 <a href="about.php">About</a>
 			 <a href="contact.php">Contact</a>
		</div>
		
			<div class="login-page">
	<table class="form" align="center" width="100" height="100">
		
	<form class="Sign in"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
		
		<tr><td>
		<img src="logoproject.jpg" alt="Logo" width="150" >
		</td>
		
		</tr>
		<tr>
		<td><h1>Ticket.com</h1></td>
		</tr>
		<tr><td><input class="div"type="text" placeholder="Enter your Email" name="email"  required="" /></td></tr>
		<tr><td><input class="div" type="password" placeholder="Enter your Password" name="pass"  required="" /></td></tr>
		
		<tr><td><input class="button" type="Submit"  value="Sign In" name="submit" ></td></tr>
		
		<tr><td><p><span class="psw" align="right">Forget <a href="forget_pass.php">password?</a></span></p></td></tr>
		 <br/> 
		<tr><td><p class="messege">Create new account! <a href="Registration.php">Sign Up</a> </P></td></tr>
	</form>
	</table>
	</div>
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
			$sql="select * from register where email='".$_POST['email']."'and password='".$_POST['pass']."';";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['email']=$row['email'];
				header("location:User.php");
			}
			else
			{
				echo "Please Enter valid Email & password";
			}
		}
	}
?>