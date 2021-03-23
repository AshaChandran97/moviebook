<!DOCTYPE html>
<html>
<head></head>
<style>
body{
		background-image: url(img/niki.jpg);
		background-size: cover;
	}
	
   table,th,td{
	   /*border:2px solid;*/
	   border-collapse:collapse;
	   /*color:blue;
	   margin-left: 500px;
	   margin-top: 30px;
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
   	color:black;
   	font-family: segoe print;
   	font-size: 38px;
   	text-decoration: underline;
   	text-align: center;
   }
   
   a{
   	font-size: 25px;
   	color:red;
   }
</style>

<body>
<h1><strong> ONLINE MOVIE BOOKING</strong></h1>
<a href="adminhome.php">Back to Home</a>
<table>
	<thead>
	<tr>
	    <th>sl_id</th>
		<th>movie</th>
		<th>date</th>
		<th>time</th>
		<th>total seats</th>
		<th>Action</th>
		<th>Action</th>
	
	</tr>
	</thead>
	
	<tbody>	
<?php
$mysql=new mysqli("localhost","root","","moviebook");
$q=$mysql->query("select * from movie");
	while($row=$q->fetch_assoc())
	{
	echo "<tr>
		<td>".$row['id']."</td>
		<td>".$row['movie_name']."</td>
		<td>".$row['date']."</td>
		<td>".$row['time']."</td>
		<td>".$row['total_seat']."</td>
		<td><a href='mvedit.php?y=$row[id]'>Edit</a></td>
		<td><a href='mvdelete.php?x=$row[id]'>Delete</a></td>
	    </tr>";
		}
?>
	</tbody>
</table>

</body>
</html>