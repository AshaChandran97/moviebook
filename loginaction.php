<?php
session_start(); 
require('connect.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $flag=0;
    $res="select * from login";
    $result=mysqli_query($link,$res);
    while($row=mysqli_fetch_array($result))
        {
            $_SESSION['id']=$row['id'];
            if($row['email']==$email && $row['password']==$password && $row['usertype']=='1')
            {
                echo "Succesfully Login";
                header('Location:adminhome.php');
                $flag=1;
                break;
                
            }
            if($row['email']==$email && $row['password']==$password && $row['usertype']=='0')
            {
                
                echo "Succesfully Login";
                header('Location:userhome.php');
                $flag=1;
                break;
                
            
            }
            if($flag==0)
            {
                echo "invalid user";
                 header('location:login.php');
            
            }
            
           
             
            
        }
        
    
}

    ?>