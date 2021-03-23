<?php
$link=mysqli_connect("localhost","root","","moviebook");
if($link===false)
{
    die("ERROR:could not connect".mysqli_connect_error());
}
if(isset($_GET['submit']))
{
   $name=$_GET['name'];
   $email=$_GET['email'];
   $feedback=$_GET['comments'];
$result="insert into feedback(name,email,feedback) values('$name','$email','$feedback')";
if(mysqli_query($link,$result))
{
   echo "inserted succesfully";
  header('location:feedbackpg.php');
}
else{
   echo"could not connect to $result".mysqli_error($link);
}
}

?>

