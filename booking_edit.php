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
	<a href="booking_view.php">Back to Home</a>
<?php
require('connect.php');
	
$id=$_GET['y'];
$sql="select * from booktb where id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
?>
<form action="booking_update.php" method="post">
<center><fieldset>
	<h3>BOOKING UPDATIONS</h3>

<input type="hidden" name="id" value="<?php echo $row['id'];?>">
Movie Name:<input type="text" name="name" value="<?php echo $row['movie'];?>"><br><br>
Movie Date:<input type="date" name="date" value="<?php echo $row['mvdate'];?>"><br><br>
Seat:<input type="text" name="seat" value="<?php echo $row['seat'];?>"><br><br>
Phone:<input type="text" name="ph" value="<?php echo $row['phone'];?>"> <br><br>
<input type="submit" value="UPDATE">


</fieldset></center>
</form>
</body>
</html>