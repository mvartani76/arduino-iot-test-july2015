<?php
   	include("db_connection.php");
   	$link=Connection();
	$Sql="INSERT INTO sensordata (temp1,photo1) VALUES ('".$_GET["temp1"]."', '".$_GET["photo1"]."')";     
   	mysqli_query($link,$Sql);
   	header("Location: displaysensordata.php");
?>