<!DOCTYPE html>
<html>
<head>
<title>Feedback view</title>

<style>
   /*table,th,td{
  border:2px solid;
  border-collapse:collapse;
  text-align: center;
   }*/
   body{
background-image:url('img/ab.jpg');
background-size: cover;
backface-visibility: 20px;
}
/*table,th,td,tr{
border-collapse:collapse;
border:2px solid black;
padding:5px;
margin-left:400px;
text-align: center;
font-size:25px;
font-family:segoe print;
margin-top:120px;
color:red;
}*/
table,th,tr,td{
width:400px;
margin-left:450px;
margin-top: 100px;
padding:20px;
/*margin:10px;*/
background-color:rgba(0,0,0,0.8);
color:red;
transition:0.5s;
outline:none;

}
h1{
	text-align: center;
	color:blue;
 	font-family: segoe print;
}
a{
	color: black;
	font-size: 28px;
}

 </style>
</head>

<body>
	<h1><strong>ONLINE MOVIE BOOKING.
	</strong></h1>
	<a href="adminhome.php">Back to Home</a>
<table>
<tr>

<th>Name</th>
<th>Email</th>
<th>Feedback</th>

</tr>
<?php
require('connect.php');
$sql="select * from feedback";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
echo "<tr>
<td>".$row['name']."</td>
<td>".$row['email']."</td>
<td>".$row['feedback']."</td>

</tr>";
}

?>

</table>
</body>
</html>
