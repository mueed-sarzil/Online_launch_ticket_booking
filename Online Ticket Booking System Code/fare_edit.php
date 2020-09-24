<?php 
       include('fare_server.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM fare where id=$id");
			$record=mysqli_fetch_array($rec);
			$launchname=$record['lname'];
			$cabinclass=$record['cclass'];
			$cabinprice=$record['price'];
			$charge=$record['charge'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
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
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<h1 align="center">Fare Edit</h1>
		<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter launch Name" name="launchname" value="<?php echo $launchname; ?>">
				</td>
		</tr>
		<tr>
							
				
				<td>
					<select class="sel" name="class" value="<?php echo $cabinclass; ?>">
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
				<input class="div" type="text" placeholder="Enter price" name="tprice" value="<?php echo $cabinprice; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Fee" name="fee" value="<?php echo $charge; ?>">
			</td>
		</tr>
			<tr>
				<td>
					<input class="button" type="submit" name="update" value="Update"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>