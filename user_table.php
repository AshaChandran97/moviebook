<!DOCTYPE html>
<html>
<head>
<title>movie table view</title>

<style>
	body{
		background-image: url(img/c5.jpg);
		background-size: cover;
	}
	
   table,th,td{
	   /*border:2px solid;*/
	   border-collapse:collapse;
	   /*color:yellow;
	   margin-left: 500px;
	   margin-top: 100px;
	   padding: 20px;*/
	   border:2px solid #5b80a4;
width:600px;
height:100px;
margin-left:350px;
padding:0px;
background-color:rgba(0,0,0,0.8);
margin-top:90px;
text-align:center;
color:white;

   }
   h1{
   	color:blue;
   	font-family: segoe print;
   	font-size: 38px;
   	text-decoration: underline;
   	text-align: center;
   }
   a{
   	font-size: 25px;
   	color:pink;
   }
 </style>
</head>
<body>
	<h1><strong> ONLINE MOVIE BOOKING</strong></h1>
	<a href="adminhome.php">Back to Home</a>
<table>
	<tr>
		
		<th>ID</th>
		<th>USERNAME</th>
		<th>AGE</th>
		<th>PHONE NUMBER</th>
	</tr>
<?php
require('connect.php');
$sql="select * from user";
$result=mysqli_query($link,$sql);

while($row=mysqli_fetch_array($result))
	{
	echo "<tr>
		<td>".$row['id']."</td>
		<td>".$row['user_name']."</td>
		<td>".$row['age']."</td>
		<td>".$row['phn_no']."</td>
	    </tr>";
		}
?>
</table>
</body>
</html>