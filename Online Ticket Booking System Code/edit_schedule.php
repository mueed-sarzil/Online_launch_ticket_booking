<?php 
       include('shserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM schedule where id=$id");
			$record=mysqli_fetch_array($rec);
			$launchname=$record['launchname'];
			$route=$record['route'];
			$launchdate=$record['launchdate'];
			$launchtime=$record['launchtime'];
			$portname=$record['portname'];
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
		<h1 align="center">Schedule Edit</h1>
		<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<table>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter launch name" name="lname" value="<?php echo $launchname; ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter launch route" name="route" value="<?php echo $route; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="date"  name="date" value="<?php echo $launchdate; ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="time"  name="time" value="<?php echo $launchtime; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter port Name" name="pname" value="<?php echo $portname; ?>">
							</td>
						</tr>
							<td>
								<input class="button" type="submit" name="update" value="Update"/>
							</td>
						</tr>
					</table>
				
				</td>
				
			</tr>
			
		</table>
	</form>
</body>
</html>