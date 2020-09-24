<?php
       $id=0;
        $launchname="";
        $route="";
        $launchdate="";
      $launchtime="";
       $portname="";
       $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM schedule where id=$id");
    header('location:schedule.php');
   }
   //update
   if(isset($_POST['update']))
       {
       
        $launchname=$_POST['lname'];
        $route=$_POST['route'];
        $launchdate=$_POST['date'];
        $launchtime=$_POST['time'];
        $portname=$_POST['pname'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE schedule SET launchname='$launchname',route='$route',launchdate='$launchdate',launchtime='$launchtime',portname='$portname' where id=$id" );
       header('location:schedule.php');
       }  
?>