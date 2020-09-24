<?php

				$id=0;
                $launchname="";
                $cabinclass="";
                $cabinprice="";
                $charge="";
                $edit_state=false;
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM fare where id=$id");
    header('location:fare.php');
   }
   //update
  if(isset($_POST['update']))
       {
       $launchname=$_POST['launchname'];
       $cabinclass=$_POST['class'];
       $cabinprice=$_POST['tprice'];
       $charge=$_POST['fee'];
       $id = $_POST['id'];
       mysqli_query($con,"UPDATE fare SET lname='$launchname',cclass='$cabinclass',price='$cabinprice',charge='$charge' where id=$id" );
       header('location:fare.php');
       }  
?>