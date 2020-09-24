<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
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
				#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<!--<table align="center">
			<tr>
					
					<td>
						<a class="button" href="cabinwise.php" target="myframe">Cabin Select</a>
					</td>

				</tr>
		</table>-->
		<div align="center">
			<input class="button" type="submit" name="select" value="Cabin Select">
	<?php
				if(isset($_POST['select']))
				{
					//header("location:cabinwise.php");
					$con=mysqli_connect("localhost","root","","test");
					if(!$con)
					{
						die("connection error:".mysqli_connect_error());
					}
					else
					{
						$sql="select cabininfo.* from cabininfo ";
						$result=mysqli_query($con,$sql);
						if(mysqli_num_rows($result)>0)
						{
							$row=mysqli_fetch_array($result);
							
							header('Location:cabinwise.php');
						}
					}
				}
?>
		</div>
		<?php include 'booking_schedule.php'; showdata(); ?>
	</form>
	<h2>Available Launches</h2><hr/>
       <table align="center" width="500">
		<tr>
			<td>Sundorban 2</td>
			<td>Sundorban 5</td>
		</tr>
		<tr>
			<td>Sundorban 10</td>
			<td>Sundorban 11</td>
		</tr>
		<tr>
			<td>Sundorban 12</td>
			<td>Sundorban 9</td>
		</tr>
		<tr>
			<td>Pubali 1</td>
			<td>Manik 9</td>
		</tr>
		<tr>
			<td>Satil Arab</td>
			<td>Juboraj 4</td>
		</tr>
		<tr>
			<td>Parabat 11</td>
			<td>Parabat 12</td>
		</tr>
		<tr>
			<td>Manik 9</td>
			<td>pubali 7</td>
		</tr>
		<tr>
			<td>Tipu 7</td>
			<td>Farhan 8</td>
		</tr>
		<tr>
			<td>Kirtonkhola 10</td>
			<td>Kirtonkhola 2</td>
		</tr>
		<tr>
			<td>Eyad 1</td>
			<td>Hasan Hosen 1</td>
		</tr>
		<tr>
			<td>Farhan 10</td>
			<td>Farhan 9</td>
		</tr>
		<tr>
			<td>Cristal cruiz</td>
			<td>Kornofuli 9</td>
		</tr>
		<tr>
			<td>Kornofuli 10</td>
			<td>Kornofuli 11</td>
		</tr>
	   </table><hr/>
	   
	   <h2>Available Route</h2><hr/>
       <table align="center" width="500">
		<tr>
			<td>Barguna</td>
			<td>Barisal</td>
		</tr>
		<tr>
			<td>Bhola</td>
			<td>Patuakhali</td>
		</tr>
		<tr>
			<td>Tushkhali</td>
			<td>Jalhokhati</td>
		</tr>
		<tr>
			<td>Amtoli</td>
			<td>Najirpur</td>
		</tr>
		<tr>
			<td>Rangabali</td>
			<td>Dhulia</td>
		</tr>
		<tr>
			<td>Vashanchor</td>
			<td>Muladi</td>
		</tr>
		<tr>
			<td>Chandpur</td>
			<td>Centmartin</td>
		</tr>
		<tr>
			<td>Betua</td>
			<td>Charfashion</td>
		</tr>
		
	   </table><hr/>
</body>
</html>