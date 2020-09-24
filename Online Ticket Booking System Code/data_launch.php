<?php
	$con=mysqli_connect("localhost","root","","test");
	$sql="SELECT * from linfo where lname LIKE '".$_REQUEST["q"]."%' ;";
	$result=mysqli_query($con,$sql);
	$list="";
	for($i=0;$i<mysqli_num_rows($result);$i++)
	{
		$row[$i]=mysqli_fetch_array($result);
		$list.="<br/>".$row[$i]['lname'];
		$list.="<br/>".$row[$i]['route'];
		$list.="<br/>".$row[$i]['lmobile'];


	}
	echo $list===""?"No suggestion:":$list;
?>