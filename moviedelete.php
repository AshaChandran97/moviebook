<?php
require('connect.php');
$id=$_GET['id'];
$sql="delete from movie where id=$id";
mysqli_query($link,$sql);
header("location:movietbl.php");

?>