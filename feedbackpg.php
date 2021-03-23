<!DOCTYPE html>
<html>
<head>
<title>Movie booking system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
.table{
background-image: url("img/c8.jpg");
background-size: cover;
}
/*.table{
	/*margin-left: 360px;*/
/*	margin: 100px;
}*/
/*.table a{
	font-size: 25px;
   	color:red;
}*/

</style>
<body class="table">
	<h1><strong> ONLINE MOVIE BOOKING</strong></h1>
	<a href="userhome.php">Back to Home</a>
<div class="container table1" style="border: 1px solid black">
<div class="imgbg">
</div>
<div class="row" style="margin-top: 50px;">
<div class="col">
<h2 style="text-align: center ; text-decoration:underline; color:blue">Feedback</h2>
<p style="text-align: center">Please provide your feedback</p>
<form action="insertfeedback.php" method="get">
<div class="row ">
<div class="col-6">
Name:
<input type="text" name="name">

<div class="col-6">
Email:
<input type="email" name="email">
</div>
</div>
<div class="row">
<div class="col-6">
Comments:
<textarea type="textarea" name="comments"></textarea>
</div>
</div>
<div class="row">
<div class="col-6">
<button type="submit" name="submit" value="submit" class="btn btn-lg btn-warning btn-block">Post</button>
</div>
</div>
</form>

</div>

</div>
</div>
</body>
</head>
</html>



