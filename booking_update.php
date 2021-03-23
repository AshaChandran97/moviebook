<?php
require('connect.php');

$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['date'];
$seat=$_POST['seat'];
$phone=$_POST['ph'];

$sql="update booktb set movie='$name',mvdate='$date',seat='$seat',phone='$phone' WHERE id='$id'";
if(mysqli_query($link,$sql))
 {
	 echo "updated:)";
 }
 else
 {
	 echo "error :( ";
 }
 header("location:booking_view.php");
?>