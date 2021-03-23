<html>
<head>
<title>admin edit page</title>
	<style>
		/*fieldset{
			width:500px;
			height:400px;
		}*/
		form{
border:2px solid #5b80a4;
width:450px;
height:300px;
margin-left:500px;
padding:20px;
background-color:rgba(0,0,0,0.8);
margin-top:90px;
text-align:center;
color:white;

}
body{
	background-color: black;
}
a{
	color:red;
	font-size: 29px;
}
h1{
	text-align: center;
	text-decoration: underline;
}	
	</style>
	
</head>
<body>
	<h1 style="color:brown;font-family: segoe print"><strong> ONLINE MOVIE BOOKING</strong></h1>
	<a href="adminmovietbl.php">Back to Home</a>
<?php
require('connect.php');
	
$id=$_GET['y'];
$sql="select * from movie where id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
?>
<form action="mvupdate.php" method="post">
<center><fieldset>
	<h3>BOOKING UPDATIONS</h3>

<input type="hidden" name="id" value="<?php echo $row['id'];?>">
Movie:<input type="text" name="movie" value="<?php echo $row['movie_name'];?>"><br><br>
Date:<input type="date" name="date" value="<?php echo $row['date'];?>"><br><br>
Time:<input type="time" name="time" value="<?php echo $row['time'];?>"> <br><br>
Seat:<input type="text" name="seat" value="<?php echo $row['total_seat'];?>"><br><br>

<input type="submit" value="UPDATE">


</fieldset></center>
</form>
</body>
</html>