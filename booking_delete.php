<?php
require('connect.php');

$id=$_GET['x'];	
	
$sql="delete from booktb where id=$id";
 if(mysqli_query($link,$sql))
 {
	 echo "one row deleted :)";
 }
 else
 {
	 echo "error :( ";
 }
header("location:booking_view.php");

?>