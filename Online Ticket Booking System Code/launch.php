<html>
	<head>
		<title>
			Launch Details|Ticket.com
		</title>
		<style>
		body {background-image: url("back3.jpg");
				 height: 450%;
				  background-size: cover;
				background-repeat: no-repeat;
		}
		h1{color: orange;}
		h2{color: white;}
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
	input[type=text] {
    width: 40%;
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
		</div><hr/>
		<div >
			<h2 align="center">Launch Information</h2>
			<label><b>Search By Launch Name:</b></label>
			<input type="text" onkeyup="getData(this.value)" placeholder="Search" />
			<p id="sug">Suggestion:</p>
		  <?php include 'user_launch_details.php'; showdata(); ?>
		  <script >
			function getData(str)
			{
				if(str.length==0)
				{
					document.getElementById("sug").innerHTML="empty";
				}
				else
				{

					var xhttp= new XMLHttpRequest();

					xhttp.onreadystatechange= function()
					{
 
						if(this.readyState==4 && this.status==200)
						{
							document.getElementById("sug").innerHTML=this.responseText;
						}
					};

					xhttp.open("GET","data_launch.php?q="+str,true);
					xhttp.send();
				}
			}
		</script>
		</div>
	</body>
		
	</body>
</html>