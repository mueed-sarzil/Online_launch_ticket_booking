<?php
	$con=mysqli_connect("localhost","root","","test");
	$sql="SELECT * from schedule where launchname LIKE '".$_REQUEST["q"]."%' ;";
	$result=mysqli_query($con,$sql);
	$list="";
	for($i=0;$i<mysqli_num_rows($result);$i++)
	{
		$row[$i]=mysqli_fetch_array($result);
		$list.="<br/>".$row[$i]['launchname'];
		$list.="<br/>".$row[$i]['route'];
		$list.="<br/>".$row[$i]['launchdate'];
		$list.="<br/>".$row[$i]['launchtime'];
		$list.="<br/>".$row[$i]['portname'];


	}
	echo $list===""?"No suggestion:":$list;
?>