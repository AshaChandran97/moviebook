<?php
require('connect.php');

$id=$_POST['id'];
$movie=$_POST['movie'];
$date=$_POST['date'];
$time=$_POST['time'];
$seat=$_POST['seat'];

$sql="update movie set movie_name='$movie',date='$date',time='$time',total_seat='$seat' WHERE id='$id'";
if(mysqli_query($link,$sql))
 {
	 echo "updated:)";
 }
 else
 {
	 echo "error :( ";
 }
 header("location:adminmovietbl.php");
?>