
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
				.button1 {
				    background-color: blue;
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
				.button2 {
				    background-color: red;
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
				
		}
		.sel {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
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
.error{color: red;}
		</style>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php include 'show_fare.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$lErr=$cErr=$pErr=$fErr="";
			$launchname=$class=$tprice=$fee="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
			
		{
		if(empty($_POST["launchname"]))
		{
			$lErr="*Launch name is required";
		}
		else
		{
			$launchname=test_input($_POST["launchname"]);
			
		}
		
		
		if(empty($_POST["class"]))
		{
			$cErr="*Cabin class is required";
		}
		else
		{
			$class = test_input($_POST["class"]);
		}

            if (empty($_POST["tprice"])) {
               $pErr = "*Cabin price is required";
			}
            else {
               $tprice = test_input($_POST["tprice"]);
            }
			 if (empty($_POST["fee"])) {
               $fErr = "*Fee is required";
			}
            else {
               $fee = test_input($_POST["fee"]);
            }
			
		
		}
		
	function test_input($data)
	{
		$data=trim($data);
		$data= stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>
		<h1>Fare Information</h1>
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter launch Name" name="launchname" value="<?php echo $launchname; ?>">
					<span class="error"><?php echo $lErr; ?></span>
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
					<span class="error"><?php echo $cErr; ?></span>
				</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter price" name="tprice" value="<?php echo $cabinprice; ?>">
				<span class="error"><?php echo $pErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Fee" name="fee" value="<?php echo $charge; ?>">
				<span class="error"><?php echo $fErr; ?></span>
			</td>
		</tr>
			
		</table>
		<div>
			
			<input class="button" type="submit" name="save" value="Save"/>
			

			<?php 

				$id=0;
				$launchname="";
				$cabinclass="";
				$cabinprice="";
				$charge="";
				$con=mysqli_connect("localhost","root","","test");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					
					$launchname=$_POST['launchname'];
				    $cabinclass=$_POST['class'];
				    $cabinprice=$_POST['tprice'];
				    $charge=$_POST['fee'];
					
					$sql="INSERT INTO fare VALUES('','$launchname','$cabinclass','$cabinprice','$charge')";
					
					mysqli_query($con,$sql);
					
					//header("Location:fare.php");
						
					} 
				}
			     
				 
			?>
		</div>
		</form>

	</body>
</html>
