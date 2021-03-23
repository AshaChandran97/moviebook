<?php
$link=mysqli_connect("localhost","root","","moviebook");
$name=$_POST["user_name"];
$age=$_POST["age"];
$email=$_POST["email"];
$phn=$_POST["phone_number"];
$pass=$_POST["password"];
$sql1="insert into login(email,password,usertype) values('$email','$pass','0')";
mysqli_query($link,$sql1);

$sql="insert into user(user_name,age,phn_no,loginid) values('$name','$age','$phn',(select id from login where email='$email'))";
mysqli_query($link,$sql);

if(mysqli_query($link,$sql,$sql1))
{
	echo "success";
}
else
{
	echo "failed".mysqli_error($link);
}
header('location:userform.php')
?>
