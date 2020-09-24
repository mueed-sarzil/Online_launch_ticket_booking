<?php
session_start();

?>
<html>

	<head>
		<title>AdminPanel|ticket.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
		.button {
				    background-color: #4CAF50;
				    border: none;
				    color: white;
				    padding: 5px 40px;
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
input[type=date] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=time] {
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
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div align="center">
		  <img src="logoproject.jpg" alt="Logo" width="150" >
			<h1>Admin Panel</h1>
		</div>
		<div align=" right">
			<input type="submit" name="logout" value="Logout" class="button"/>
			<?php
				if(isset($_POST["logout"]))
				{
					session_destroy();
					header("Location:Admin.php");
				}
			?>
		</div>
		<h1>Admin Information</h1>
		<table border="1">
			<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>UserName</th>
			<th>Password</th>
			<th colspan="2">Action</th>
		</tr>
		</tr>
	
		</table>
		<table >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter Name" name="aname" >
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Mobile No." name="mob">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter UserName" name="uname">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="password" placeholder="Enter Password" name="pass">
			</td>
		</tr>
			
		</table>
		<div>
			<input class="button" type="submit" name="save" value="Save"/>
			<?php 

				$id=0;
				$name="";
				$mobile="";
				$username="";
				$password="";
				$con=mysqli_connect("localhost","root","","launch");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					$name=$_POST['aname'];
					$mobile=$_POST['mob'];
					$username=$_POST['uname'];
					$password=$_POST['pass'];
					
					
					$sql="INSERT INTO admin VALUES('','$name','$mobile','$username','$password')";
					
					mysqli_query($con,$sql);
					
					
						
					} 
				}
			     $result=mysqli_query($con,"SELECT * FROM admin");
				 
			?>
		</div>
		
		<table border="1">
		<h1>Schedule</h1>
			<tr>
			<th>Launch name</th>
			<th>Route</th>
			<th>Date</th>
			<th>Time</th>
			<th>Port Name</th>
			<th>Action</th>
			<th colspan="2">Action</th>
		</tr>
		</tr>
			<tr>
			<td> Sundorban 10</td>
			<td>Dhaka-Barisal</td>
			<td>3/7/2018</td>
			<td>8:00PM</td>
			<td> Barisal</td>
			<td><a class="button" href="#">Edit</a></td>
			<td><a class="button" href="#">Delete</a></td>
		</tr>
			
		</table>
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<table>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter launch name" name="lname">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter launch route" name="route">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="date"  name="date">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="time"  name="time">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter port Name" name="pname">
							</td>
						</tr>
						<!--<tr>
							<td>
								<input class="button" type="submit" name="save" value="Save"/>
							</td>
						</tr>-->
					</table>
				
				</td>
				
			</tr>
			
		</table>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div>
		<input class="button" type="submit" name="save" value="Save"/>
		<?php 
				$id=0;
				$launchname="";
				$route="";
				$launchdate="";
				$launchtime="";
				$portname="";
				$con=mysqli_connect('localhost','root','','launch');
				if(!$con)
				{
					die("error");
				}
				else{
				if(isset($_POST['save']))
					  {
						  
						$launchname=$_POST['lname'];
						$route=$_POST['route'];
						$launchdate=$_POST['date'];
						$launchtime=$_POST['time'];
						$portname=$_POST['pname'];
						$query="INSERT INTO schedule VALUES('','$launchname','$route','$launchdate','$launchtime','$portname')";
						mysqli_query($con,$query);
						//echo $query;
						
					  } 
				}
			?>
			
		</div>
		</form>
		
		<table >
	
		<h1>Launch Information</h1>
						<tr>
							<td>
			     				<img src="img.jpg" width="100">
							</td>
						</tr>
						<tr>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter route" name="rname" >
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Launch Name" name="loname">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Mobile" name="mno">
			</td>
		</tr>
		
		<tr>
			<td>
				<input class="button" type="submit" name="save" value="Save"/>
			</td>
		</tr>
			
		</table>
		<div>
		
			<?php 

				$id=0;
				$loroute="";
				$loname="";
				$lomobi="";
				$con=mysqli_connect("localhost","root","","launch");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					$loroute=$_POST['rname'];
					$loname=$_POST['loname'];
					$lomobi=$_POST['mno'];
					$sql="INSERT INTO launchinfo VALUES('','$loroute','$loname','$lomobi')";
					
					mysqli_query($con,$sql);
								
						
					} 
				}

				 
			?>
		</div>
		</form>
			
		<table border="1">
			<h1>Payment Info</h1>
			<tr>
			<th>Merchant Number</th>
			<th>Transection ID</th>
			<th>Ref no</th>
			<th>Action</th>
			<th colspan="2">Action</th>
		</tr>
		</tr>
			<tr>
			<td>01747049043</td>
			<td>bksp123</td>
			<td>12</td>
			<td><a class="button" href="#">Edit</a></td>
			<td><a class="button" href="#">Delete</a></td>
		</tr>
			
		</table>
		<table>
			<tr>
				<td>
				<table>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Merchant mobile no" name="mob"/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter transection ID" name="id"/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Referance no" name="refno"/>
							</td>
						</tr>
						<!--<tr>
							<td>
								<input class="button" type="button" value="Save" name="save">
							</td>
						</tr>-->
					</table>
				</td>
				</tr>
		</table>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div>
		<input class="button" type="submit" name="save" value="Save"/>
		<?php 
				$id=0;
				$merchantno="";
				$transection="";
				$refno="";
				$con=mysqli_connect('localhost','root','','launch');
				if(!$con)
				{
					die("error");
				}
				else{
				if(isset($_POST['save']))
					  {
						  
						$merchantno=$_POST['mob'];
						$transection=$_POST['id'];
						$refno=$_POST['refno'];
						$query="INSERT INTO paymentinfo VALUES('','$merchantno','$transection','$refno')";
						mysqli_query($con,$query);
						//echo $query;
						
					  } 
				}
			?>
		</div>
		</form>
		<table>
		<tr>
			
			<td>
				<table>
				<h1>News</h1>
						<tr>
							<td>
								<textarea rows="4" cols="40"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input class="button" type="button" value="Save" name="save">
							</td>
							<td>
								<input class="button" type="button" value="Update" name="update">
							</td>
							<td>
								<input class="button" type="button" value="Delete" name="delete">
							</td>
						</tr>
					
					</table>

			</td>
		</tr>
	</table>
	<table>
			<tr>
				
			<td>
				<table>
				<h1>Video</h1>
						<tr>
							<td>
								<input type="file" name="fileToUpload" id="fileToUpload">
							</td>
						</tr>
						<tr>
							<td>
								<input class="button" type="button" value="Save" name="save">
							</td>
							<td>
								<input class="button" type="button" value="Update" name="update">
							</td>
							<td>
								<input class="button" type="button" value="Delete" name="delete">
							</td>
						</tr>
					
					</table>

			</td>
			<td>
				<table>
						<h1>Cabin Details</h1>
						
						<tr>
							
								
								<td>
									<select>
										<option> Cabin Class</option>
										<option>Single AC</option>
										<option>Double AC</option>
										<option>Single Non AC </option>
										<option>Double Non AC</option>
										<option>Family</option>
										<option>VIP</option>
									</select>
								</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter seat no" name="seat">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Fare" name="fare">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter status" name="status">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Cabin no" name="cnum">
							</td>
						</tr>
						<tr>
							<td>
								<input class="button" type="button" value="Save" name="save">
							</td>
							<td>
								<input class="button" type="button" value="Update" name="update">
							</td>
							<td>
								<input class="button" type="button" value="Delete" name="delete">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
			</td>
		</tr>
	</table>
		
		
		</form>
	</body>
</html>



