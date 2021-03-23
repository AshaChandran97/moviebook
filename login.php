<!DOCTYPE html>
<html>
<head>
</head>
<title>Movie booking system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<style>
.frm{
border:2px solid #5b80a4;
width:450px;
height:450px;
margin-left:500px;
padding:20px;
background-color:rgba(0,0,0,0.8);
margin-top:90px;
text-align:center;
color:white;

}
.frm input{
width:400px;

padding:20px;
margin:10px;
background-color:rgba(0,0,0,0.8);
color:white;
transition:0.5s;
outline:none;

}
.frm input:focus{
box-shadow:0px 0px 20px  6px #5b80a4;
}
.bi
{

background-image:url("img/c3.jpg");
background-size:cover;

}
h1
{
	text-align: center;
}

</style>
<body class="bi">
<h1 style="color:brown;font-family: segoe print"><strong> ONLINE MOVIE BOOKING</strong></h1>
<div class="frm">


<form action="loginaction.php" method="POST">
<fieldset>
<legend style="font-size: 28px;color:red"> Login </legend>
Email id:<input type="email"name="email"placeholder="Enter your email"><br>
Password:<input type="password"name="password"placeholder="Enter your password"><br>
<button type="submit" name="submit" value="login" class="btn btn-success ">Login</button>
<a href="home.php" style="font-size:20px;color:green; margin-left: 45px" class="right">Home</a>
</fieldset>
</form>
</div>

</body>
</html>
	