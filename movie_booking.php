<?php
session_start();
$id=$_SESSION['id'];
$ph_err="";
require('connect.php');
$mv=$_GET['mv_name'];

$date=$_GET['date'];
$st=$_GET['seat'];
/*mobile no validation*/
if(isset($_GET['ok']))
{
	
if(empty($_GET['phn']))
{
	$ph_err=" mob no is required";
}
else
{

	$ph=($_GET['phn']);
	if (!preg_match ("/^[0-9]*$/", $ph) )
	{  
    $ph_err= "Only numeric value is allowed.";  
      
	}

	if (strlen ($ph) != 10)
	 {  
        $ph_err= "Mobile no must contain 10 digits.";  
    }  
 } 



$sql="INSERT into booktb(movie,mvdate,seat,phone,loginid) values('$mv','$date','$st','$ph','$id')";
if(mysqli_query($link,$sql))
{
	//echo "inserted in movie table successfully";
}
else
{
	echo "error".mysqli_error($link);
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
</head>
		<style>
			/*fieldset{
				height:300px;
				width:400px;
			}
			.error
			{
			color:red;
			}
*/
/*fieldset{
border:2px solid #5b80a4;
width:450px;
height:450px;
margin-left:500px;
padding:20px;
background-color:rgba(0,0,0,0.8);
margin-top:90px;
text-align:center;
color:white;

}*/
form{
width:400px;

padding:20px;
/*margin:10px;*/
background-color:rgba(0,0,0,0.8);
color:white;
transition:0.5s;
outline:none;
margin-left: 445px;
}
form{
box-shadow:0px 0px 20px  6px #5b80a4;
}
body
{
background-color: black;
/*background-image:url("img/c3.jpg");
*/background-size:cover;

}
h1{
	color:silver;
	font-family: segoe print;
	font-size: 35px;
	text-align: center;
}
		</style>


<body>
	<h1><strong> ONLINE MOVIE BOOKING</strong></h1>
	<a href="userhome.php">Back to Home</a>
<form action="movie_booking.php" method="get">	
	<center><fieldset>	
			<h2>Movie Booking</h2>

			<label>Movie Name: </label><select placeholder="Movie name" name="mv_name" required>
				<option></option>
				<option>krish</option>
				<option>niram</option>
				<option>fida</option>
			</select><br><br>
			<label>Date:</label><input type="date" name="date"><br><br>
			
			<label>Seat Type: </label><select name="seat">
				<option></option>
				<option>Balconey</option>
				<option>1st class</option>
				<option>2nd class</option>
				</select><br><br>
			<label>Phone number:</label><input type="text" name="phn" placeholder="mobile no:" required><span class="error">*<?php echo $ph_err;?></span><br><br>
			<input type="submit" value="OK" name="ok">


	</fieldset></center>
</form>
</body>
</html>


