<?php
require('connect.php');

$id=$_GET['x'];	
	
$sql="delete from movie where id=$id";
 if(mysqli_query($link,$sql))
 {
	 echo "one row deleted :)";
 }
 else
 {
	 echo "error :( ";
 }
header("location:adminmovietbl.php");

?>