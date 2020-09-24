<?php
                $id=0;
                $launchname="";
                $cabclass="";
                $seatno="";
                $fare="";
                $status="";
                $cabinno="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM cabininfo where id=$id");
    header('location:cabininfo.php');
   }
   //update
   if(isset($_POST['update']))
       {
        $launchname=$_POST['lnname'];
        $cabclass=$_POST['class'];
        $seatno=$_POST['sno'];
        $fare=$_POST['efare'];
        $status=$_POST['es'];
        $cabinno=$_POST['cn'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE cabininfo SET launchname='$launchname',cclass='$cabclass',seatno='$seatno',fare='$fare',status='$status',cabinno='$cabinno' where id=$id" );
       header('location:cabininfo.php');
       }  
?>