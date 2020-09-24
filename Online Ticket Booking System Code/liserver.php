<?php
    $id=0;
        $route="";
        $lname="";
        $lmobile="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM linfo where id=$id");
    header('location:linfo.php');
   }
   //update
   if(isset($_POST['update']))
       {
        $route=$_POST['route'];
        $lname=$_POST['lname'];
        $lmobile=$_POST['lmobile'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE linfo SET route='$route',lname='$lname',lmobile='$lmobile' where id=$id" );
       header('location:linfo.php');
       }
?>