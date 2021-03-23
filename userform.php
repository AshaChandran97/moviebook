<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1{
	
	color:white;
	font-size:40px;
	margin-left:250px;
}
.bi
{
background-image:url("img/body.jpg");
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>online movie booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bi">
<h1>MOVIE BOOKING SYSTEM</h1>
    <div class="main">
  
        <div class="container">
            <form class="appointment-form" id="appointment-form" action="insert.php" method="POST">
                 <a href="home.php">HOME</a>
                <h2>User Registration Form</h2>

                <div class="form-group-1">
                    <input type="text" name="user_name" id="name" placeholder="Your Name" required />
                    <input type="text" name="age" id="age" placeholder="Your Age" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <input type="password" name="password" id="password" placeholder="Set Password" required />
                    
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
            </form> 
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>