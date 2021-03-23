<!DOCTYPE html>
<html>
<head>
<title>movie table view</title>

<style>
   table,th,td{
	   border:2px solid;
	   border-collapse:collapse;
	   /*margin-left: 500px;*/
	   margin-top: 50px;
	   padding: 10px;
	  
   }
   body{
   	background-image: url(img/c8.jpg);
   	background-size: cover;

   }
 </style>
</head>

<body>
	<h1><strong>ONLINE MOVIE BOOKING.</strong></h1>
<a href="adminhome.php">Back to Home</a>

<table>
	<tr>
		
		<th><strong>Movie Name</strong></th>
		<th><strong>Date</strong></th>
		<th><strong>Seat</strong></th>
		<th><strong>Phone</strong></th>
		
		<th><strong>Delete</strong></th>
	</tr>
	
	

<?php
require('connect.php');
$sql="select * from booktb";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "<tr>
			<td>".$row['movie']."</td>
			<td>".$row['mvdate']."</td>
			<td>".$row['seat']."</td>
			<td>".$row['phone']."</td>
			<td><a href='booking_delete.php?x=$row[id]'>Delete</a></td>
			</tr>";
}

?>

</table>
</body>
</html>