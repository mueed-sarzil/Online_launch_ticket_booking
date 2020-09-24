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
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 130%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.deg {
    width: 130%;
    padding: 5px 5px;
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
.error{color:red;}
         </style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php include 'cabinwise_show.php'; showdata(); ?>
		<!--validation-->

	<?php  
		$nErr=$mErr=$eErr=$dErr=$lnErr=$ccErr=$ncErr=$cnErr=$bpErr="";
		$name=$mobile=$email=$gender=$launchname=$cabinsel=$num=$cabinnum=$dest="";		
		if($_SERVER["REQUEST_METHOD"]== "POST")
		{

		if(empty($_POST["name"]))
		{
			$nErr="Name is required";
		}
		else
		{
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nErr = "Only letters and white space allowed"; 
			}
		}
	
	
		if(empty($_POST["mobile"]))
		{
			$mErr="Mobile no is required";
		}
		else
		{
			$mobile = test_input($_POST["mobile"]);
		}

		  if (empty($_POST["email"])) {
		    $eErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $eErr = "Invalid email format"; 
		    }
		  }
		
            if (empty($_POST["gender"])) {
               $dErr = "Date is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }

             if (empty($_POST["launchname"])) {
               $lnErr = "Launch Name is required";
            }else {
               $launchname = test_input($_POST["launchname"]);
            }

            if (empty($_POST["cabinsel"])) {
               $ccErr = "Cabin Class is required";
            }else {
               $cabinsel = test_input($_POST["cabinsel"]);
            }

            if(empty($_POST['cabinsel']))
			{
			
			    $ccErr ="Please select a cabin from the list";
			    $error=true;
			}
			else
			{
			    $cabinsel = test_input($_POST["cabinsel"]);
			}


            if (empty($_POST["num"])) {
               $ncErr = "Number of cabin is required";
            }else {
               $num = test_input($_POST["num"]);
            }
			
			if (empty($_POST["cabinnum"])) {
               $cnErr = "Cabin Number is required";
            }else {
               $cabinnum = test_input($_POST["cabinnum"]);
            }

            if (empty($_POST["dest"])) {
               $bpErr = "Destination is required";
            }else {
               $dest = test_input($_POST["dest"]);
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

		<div>
			<a class="button"href="booking_cabinlist.php">Show Cabin</a>
		</div>
				<table align="center">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<tr>
               <td>Name:</td>
               <td><input type = "text" name = "name" placeholder="Enter Your Name">
                 <span class="error"><?php echo $nErr; ?></span>
               </td>
               </tr>
             <tr>
			 <td>Mobile:</td>
               <td><input type = "text" name = "mobile" placeholder="Enter Your Mobile">
                 <span class="error"><?php echo $mErr; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email" placeholder="Enter Your Email">
                  <span class="error"><?php echo $eErr; ?></span>
               </td>
            </tr>
            <tr>
            <td>Journey Date:</td>
               <td>
                  <input type="date" name="gender">
                  <span class="error"><?php echo $dErr; ?></span>
               </td>
           </tr>
							<tr>
								<td>
									<label>Launch Name:</label>
								</td>
								<td>
									<input class="div"type="text" placeholder="Enter launch name" name="launchname">
									<span class="error"><?php echo $lnErr; ?></span>
								</td>
							</tr>
							<tr>
								<td>
									<label>Cabin Class:</label>
								</td>
								<td>
									<select class="deg" name="cabinsel">
										<option>Select Cabin</option>
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
									<label>Number Of Cabin:</label>
								</td>
								<td>
									<select class="deg" name="num">
									<option>--Select--</option>
										<option>0</option>
										<option>1</option>
										<option>2</option>
										
									</select>
									<span class="error"><?php echo $ncErr; ?></span>
								</td>
											</tr>
											 </tr>
							 <td>Cabin Number:</td>
				               <td><input type = "text" name = "cabinnum" placeholder="Cabin Number">
				                 <span class="error"><?php echo $cnErr; ?></span>
				               </td>
				            </tr>
							<tr>
								<td>
									<label>Broading Point:</label>
								</td>
								<td>
									<select class="deg" name="dest">
									<option>--Broading points--</option>
										<option>Sadarghat(8.0PM)</option>
										
										
									</select>
									<span class="error"><?php echo $bpErr; ?></span>
								</td>
							</tr>
							
							
						</table>
					</fieldset>
				</td>
			</tr>
		</table>
		<div align="center">
			<input class="button"type="submit" value="Submit" name="save">
			<a class="button"href="Payment_very.php">Continue</a>
			<?php
			$id=0;
			$username="";
			$gender="";
			$mobile="";
			$email="";
			$launchname="";
			$class="";
			$numcabin="";
			$number="";
			$broading="";
			$con=mysqli_connect("localhost","root","","test");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
						$username=$_POST['name'];
						$gender=$_POST['gender'];
						$mobile=$_POST['mobile'];
						$email=$_POST['email'];
						$launchname=$_POST['launchname'];
						$class=$_POST['cabinsel'];
						$numcabin=$_POST['num'];
						$number=$_POST['cabinnum'];
						$broading=$_POST['dest'];
								
					
					$sql="INSERT INTO ticket VALUES('','$username','$gender','$mobile','$email','$launchname','$class','$numcabin','$number','$broading')";
					
					mysqli_query($con,$sql);
					
					
						
					} 
				}

			?>
		</div>
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