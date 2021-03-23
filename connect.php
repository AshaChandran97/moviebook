<?php
$link=mysqli_connect("localhost","root","","moviebook");
if($link===false)
{
	die("can't connect".mysqli_connect_errror());
}
?>