<!DOCTYPE html>
<html>
<head>
<title>movie table view</title>

<style>
   table,th,td{
	  /* border:2px solid;*/
	   border-collapse:collapse;
border:2px solid #5b80a4;
/*width:450px;
height:450px;*/
margin-left:450px;
padding:20px;
background-color:rgba(0,0,0,0.8);
margin-top:90px;
text-align:center;
color:white;

}
body{
	background-image: url(img/l7.jpg);
	background-size: cover;
	}
	h1{
		color:white;
		text-align: center;
		font-family: segoe print;
		text-decoration: underline;
	}
	a{
		color:red;
		text-align: center;
		font-family: segoe print;
		text-decoration: underline;
	}
 </style>
}
</head>

<body>
<h1><strong> ONLINE MOVIE BOOKING</strong></h1>
<a href="userhome.php">Back to Home</a>
<table>
	<tr>
		
		<th>Movie Name</th>
		<th>Date</th>
		<th>Seat</th>
		<th>Phone</th>
	
	</tr>
	
	

<?php
session_start();
$id=$_SESSION['id'];
require('connect.php');
$sql="select * from booktb where loginid='$id'";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "<tr>
			<td>".$row['movie']."</td>
			<td>".$row['mvdate']."</td>
			<td>".$row['seat']."</td>
			<td>".$row['phone']."</td>
			</tr>";
}

?>

</table>
</body>
</html>