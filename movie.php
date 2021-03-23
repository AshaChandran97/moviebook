<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
	body{
 	/*background-image:url("img/b.jpeg");*/
 	background-color: black;
	background-size:cover;
	}
fieldset{
width:300px;
height: 150px;
text-align: center;
padding:20px;
margin:90px 520px;
background-color:rgba(0,0,0,0.5); 
}
table,td{
	color:white;
	text-align:justify;
}
h1
{text-align:center;
   color:gold;
   font-family: segoe print;
   font-size: 48px;
   font-weight:bolder;}
</style>

</head>
<body>
	<a href="adminhome.php">Back to Home</a>
<h1> Add Movie</h1>
<form action="movie.php" method="POST"> 
  <fieldset>

     <table>
		<tr>
			<td>Movie</td>
			<td><input type="text" name="movie" placeholder="Movie"></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td>Time</td>
			<td><input type="time" name="time"></td>
		</tr>
		<tr>
			<td>Total Seats</td>
			<td><input type="text" name="total_seat"></td>
		</tr>
	</table>
			</br>
			<input type="submit" name="submit" value="submit">
  </fieldset>
</form>
<?php
require('connect.php');
$movie=$_POST["movie"];
$date=$_POST["date"];
$time=$_POST["time"];
$seat=$_POST["total_seat"];
if(isset($_POST['submit']))
{
	
$sql="insert into movie(movie_name,date,time,total_seat) values('$movie','$date','$time','$seat')";
	if(mysqli_query($link,$sql))
	{
		header("location:movie.php");
	}
	else
	{
		echo "error".mysqli_error($link);
	}
}
?>
</body>
</html>