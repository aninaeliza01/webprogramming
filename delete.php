<?php   include "connection.php";   
$delete=$_GET["did"];   
$result=mysqli_query($connection, "DELETE FROM `regi` WHERE `regID`='$delete'"); 
header("location:view.php");   
?>  
