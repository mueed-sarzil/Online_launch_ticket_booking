<html>
	<head>
		<title>
			Registration|Ticket.com
		</title>
		<style>
		body {background-image: url("back3.jpg");
				 height: 150%;
				  background-size: cover;
				background-repeat: no-repeat;

		}
		.error{color:red;}
		h1{color:orange;}
		h2{color: green;}
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
				.registration-page{
			width: 450px; 
			background: gray; 
			padding: 10px 20px; 
			box-sizing: border; 
			position:absolute; 
			left: 50%; 
			top:88%; 
			transform: translate(-50%, -50%);
		    border-radius: 10px;
			}
			h2{
			text-align: center; 
			color: blue; 
			font-weight: normal; 
			margin-bottom: 20px;
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
		.input[type="button"]{background: #bac675; border: 0; cursor: pointer;}
		input[type="button"]:hover{background: #a4b1Sc}

		a:link {
		    color: #0094DE;
		    text-decoration: none;
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
input[type=email] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}

		</style>
		
	</head>
	<body>
	
	<form action="#" method="post" >
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
	<div class="registration-page">
	<div class="form">
	<?php
			$nameErr="";
			$fname="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["fname"]))
				{
					$nameErr="*First Name is required";
				}
				else
				{
					$fname=test_input($_POST["fname"]);
					if(!preg_match("/^[a-zA-Z]*$/",$fname))
						$nameErr="*Only leters and white space allowed";
				}
			}
			$lnameErr="";
			$lname="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["lname"]))
				{
					$lnameErr="*Last Name is required";
				}
				else
				{
					$lname=test_input($_POST["lname"]);
					if(!preg_match("/^[a-zA-Z]*$/",$lname))
						$lnameErr="*Only leters and white space allowed";
				}
			}
			$mobileErr="";
			$mobile="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["mobile"])) {
               $mobileErr = "*Mobile no is required";
            }else {
               $mobile = test_input($_POST["mobile"]);
            }
			}
			$emailErr="";
			$email="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["email"]))
				{
					$emailErr="*Email is required";
				}
				else
				{
					$email=test_input($_POST["email"]);
					if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
						$emailErr="*Invalid email format";
					}
				}
			}
			 $passwordErr="";
			 $password="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["pass"])) {
               $passwordErr = "*password is required";
			   if (strlen($_POST["pass"]) <= '8') {
            $passwordErr = "*Your Password Must Contain At Least 8 Characters!";
			}
            }else {
               $password = test_input($_POST["pass"]);
            }
			}
			$dateErr="";
			$date="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["date"])) {
               $dateErr = "*Date is required";
            }else {
               $date = test_input($_POST["date"]);
            }
			}
			$genderErr="";
			$gender="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["gender"]))
				{
					$genderErr="*At least one gender is required";
				}
				else
				{
					$gender=test_input($_POST["gender"]);
					
				}
			}
			$cityErr="";
			$city="";
			if (empty($_POST["select"])) {
               $cityErr = "*You must select 1";
            }else {
               $city = $_POST["select"];	
            }
            $addErr="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["add"])) {
               $addErr = "*Address is required";
            }else {
               $add = test_input($_POST["add"]);
            }
			}
		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		  }
	?>
		<form class="Sign Up" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" >
		<h2>Sign Up</h2>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="div"type="text" placeholder="First Name" name="fname"/>
		<span class="error"><?php echo $nameErr;?></span>
		<input class="div"type="text" placeholder="Last Name" name="lname"/>
		<span class="error"><?php echo $lnameErr;?></span>
		<input class="div"type="text" placeholder="Mobile No" name="mobile"/>
		<span class = "error"><?php echo $mobileErr;?></span>
		<input class="div"type="email" placeholder="Email" name="email"/>
		<span class="error"><?php echo $emailErr;?></span>
		<input class="div"type="password" placeholder="Password" name="pass"/>
		<span class = "error"><?php echo $passwordErr;?></span>
		<br>
		<label>Date of birth : <br></label>
		<input class="div"type="date" placeholder="Date of Birth" name="date"/> 
		<span class = "error"><?php echo $dateErr;?></span>
		<label><br>Gender : required<br></label>
		<input class="div"type="radio" name="gender" value="male" /> Male
		<input class="div"type="radio" name="gender" value="female"/> Female
		<span class="error"><?php echo $genderErr;?></span>
				
		<br>
		<label>Address : <br></label>
		<input class="div"type = "text" name = "add">
          <span class = "error"><?php echo $addErr;?></span>
		<br>
		
		<input type="checkbox" name = "checked" value = "1"/> 
		<?php if(!isset($_POST['checked'])){ ?>
               <span class = "error"><?php echo "*You must agree to terms";?></span>
               <?php } ?> 
		I agree to the terms of conditons . <br>
		<div>
			<input class="button" type="submit" name="submit" value="Sign Up">
		</div><br/>
		<p class="messege">Already Regesterd? <a href='login.php'>Login</a> </P>
		</form>
		
	</div>
	</div>
	</form>
	</body>
</html>
<?php 
	
	$id=0;
	$firstname="";
	$lastname="";
	$mobile="";
	$email="";
	$password="";
	$rdate="";
	$gender="";
	$address="";
	 $con=mysqli_connect('localhost','root','','test');
	 if(isset($_POST['submit']))
  {
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$rdate=$_POST['date'];
	$gender=$_POST['gender'];
	$address=$_POST['add'];
 
  	$query="INSERT INTO register(firstname,lastname,mobile,email,password,rdate,gender,address) VALUES('$firstname','$lastname',$mobile,'$email','$password','$rdate','$gender','$address')";
  	mysqli_query($con,$query);
  	
  }
  

?>