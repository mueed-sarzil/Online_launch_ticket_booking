<!DOCTYPE html>
<html>
<head>
	<title>Forget Password|Ticket.com</title>
	<style >
		body {background-color: gray;}
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
		
		input[type=text] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
	</style>
	<script>
    function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
        alert("Username is required.");
        return false;
    }
    else
    {
    	 alert("Successfully Submit.!");
    }
}
 </script>
</head>
<body>
	<form name="myForm" onsubmit="return validateForm()"action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<a href="Admin.php">Home</a>
		<div align="center">
			<p>Please enter your register <b style="color: red;">email</b> address</p>
			Email:<input type="text" name="username" placeholder="UserName"><br/>
			<input class="button"type="submit" name="save" value="Submit">


			<?php
	
          if(isset($_POST['save']))
	     {
		$con=mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());

		}
		else
		{
		//$email=$_POST['email'];
		$sql="select * from admin where username='".$_POST['username']."'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		//echo $count;
		$row=mysqli_fetch_array($result);
		if($count>0)
		{
			echo $row['password'];
		}
		else
		{
			echo "Not Found..!";
		}
		}
	}

?>
		</div>
		
	</form>
</body>
</html>