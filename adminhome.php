<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<link rel="stylesheet" href="css/style.css">
<style>
.bg
{
	background-image:url("img/l7.jpg");
	background-size: cover;
	
}
.nav {
/* float: right;*/
  display: block;
  color:red;
  height:500px;

  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
  text-decoration:underline;
}
a
{
	font-size:40px;
	color:gold;
	font-family: segoe print;
	text-align: center;
  padding: 14px 16px;
  text-decoration:none;

}

.mar
{
	font-size:60px;
	color:blue;
	margin-top:200px;
}
h1{
	
	color:red;
	font-size:40px;
	margin-left:250px;
}
marquee
{
	color:red;
	font-size:30px;
}
</style>
</head>
<body class="bg">
<section>
<h1 style="text-align: center;margin-left: 50px;">ONLINE MOVIE BOOKING.</h1>
<nav class="nav">
	    <a href="movie.php" class="log"><strong>Movie</strong></a>
  <a href="adminmovietbl.php" class="log"><strong>Movieview</strong></a>

  <a href="user_table.php"><strong>View User</strong></a>
    <a href="booking_view.php" class="log"><strong>Booking</strong></a>
   <a href="viewfeedback.php"><strong>Feedback</strong></a>
  <a href="home.php"><strong>Logout</strong></a>

<i><marquee behavior="scroll" direction="left" scrollamount="12">Book your movie now.....</marquee></i>
<i><marquee behavior="scroll" direction="right" scrollamount="12">Book your movie now.....</marquee></i>
<i><marquee behavior="scroll" direction="left" scrollamount="20">Book your movie now.....</marquee></i>
<i><marquee behavior="scroll" direction="right" scrollamount="35">Book your movie now.....</marquee></i>
<i><marquee>Book your movie now.....</i></marquee>
</nav>
</section>
</body>
</html>
