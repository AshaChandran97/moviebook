<!DOCTYPE html>
<html>
<head>
<title>user</title>
    <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
*{
padding:0px;
margin:0px;
}

.menubar
    {
background-color:rgba(0,0,0,0.7);
text-align:center;
}
.menubar ul
    {
list-style:none;
display:inline-flex;
padding:5px;
    }
.menubar ul li a
    {
text-decoration:none;
color:white;
padding:20px;
  font-weight:bolder;

    }
.menubar ul li a:hover
    {
background-color:red;
border-radius:10px;
    }
.menubar li
    {

padding:15px;
    }
    body
        {
            background-image:url("img/c2.jpg");
            background-size:cover;
        }
        h1,h3{
            color:yellow;
        }
        .back{
            background-color:black;
        }
        h3{
            text-align:center;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <div class=" container-fluid top ">
                <div class="row back">
                    <div class="col-7">
                        <h1 class="text-decoration-none text-white" style="font-size: 48px;; ">Online Movie Booking.</h1>
                       
                     </div>
                     <div class="col-5  text-white text-end">
                         <i class="fab fa-facebook"></i>
                         <i class="fab fa-instagram"></i>
                         <i class="fab fa-google"></i>
                     </div>
                </div>
            </div>
        </nav>
    </header>
           
<nav class="menubar">
       <ul>
           <li><a href="home.php">Home</a></li>
           <li><a href="movietbl.php">Movie</a></li>
           <li><a href="feedbackpg.php">feedback</a></li>
  <li><a href="userbookview.php">Book notification</a></li>

 

       </ul>
   </nav>
   <h3><i><strong>“WE DON’T MAKE MOVIES TO MAKE MORE MONEY. WE MAKE MONEY TO MAKE MORE MOVIES.”</strong></i></h3>
</body>
</html