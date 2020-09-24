<?php 
       include('cabinserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM cabininfo where id=$id");
			$record=mysqli_fetch_array($rec);
			$launchname=$record['launchname'];
            $cabclass=$record['cclass'];
            $seatno=$record['seatno'];
            $fare=$record['fare'];
            $status=$record['status'];
            $cabinno=$record['cabinno'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
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
					input[type=text] {
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
		
		<h1 align="center">Cabin Information Edit</h1>
		
		<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
			<td>
 			  <input  type="text" placeholder="Enter Launch Name" name="lnname" value="<?php echo $launchname; ?>">
			</td>
		</tr>
		<tr>
							
				
				<td>
					<select class="div" name="class" value="<?php echo $cabclass; ?>">
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
 			  <input class="div" type="text" placeholder="Enter Seat-No" name="sno" value="<?php echo $seatno; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter fare" name="efare" value="<?php echo $fare; ?>">
			</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Status" name="es" value="<?php echo $status; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter cabin no" name="cn" value="<?php echo $cabinno; ?>">
			</td>
		</tr>
			<tr>
				<td>
					<input class="button"type="submit" name="update" value="Update">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>