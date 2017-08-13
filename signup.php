<?php

$f_name=$_POST["first_name"];
$l_name=$_POST["last_name"];
$email=$_POST["email"];
$pass=$_POST["password"];

$con=mysqli_init();
if (!$con)
  { 
  die("mysqli_init failed");
  }

if (!mysqli_real_connect($con,"localhost","root","0177","reg_info","3306","/tmp/mysql.sock"))
  {
  die("Connect Error: " . mysqli_connect_error());
  }
  else {
    
   $query  = "INSERT INTO Reg_info(First_Name,Last_Name,Email,Password) VALUES ('$f_name', '$l_name','$email','$pass')";
   
     $result = mysqli_query($con, $query);
    //$result = mysqli_query($link, $query);
    if (!$result) {
         die('Error: ' . mysqli_error($link));
       }
    else {
      echo'<p>Thanks for registering with us!</p>';
    }
    
  }

mysqli_close($con);
?>