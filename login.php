<?php
/*
$email = $_POST['email'];
$password = $_POST['password'];

$user = 'root';
$pass = '0177';
$db = 'reg_info';
$host = 'localhost';
$port=3306;
$link = mysqli_init();
// Create connection
$conn = $link->real_connect(
  $host,
  $user,
  $pass,
  $db
);
if (!$conn) {
  die('Database Connection failed');
  $link->close();
  }
/*
  else {
  
  //echo'<p>Connection was susscessfull</p>';
 
  $query  = "SELECT ID FROM Reg_info WHERE Email='$email' AND Password='$password'";
  
  }
  /*$result = mysqli_query($link, $query);
  $rowcount=mysqli_num_rows($result);
  if($rowcount==1)
  {
 
   header("Location: ./index.php");
   die();
  }
  else
  {
     header("Location: ./index.html");
     die();
  }

  $link->close();
}
*/

$email=$_POST["email"];
$pass=$_POST["password"];

$con=mysqli_init();
if (!$con)
  {
  die("mysqli_init failed");
  }

if (!mysqli_real_connect($con,"localhost","root","0177","reg_info","3306","/tmp/mysql.sock")) {
  die("Connect Error: " . mysqli_connect_error());
  }
else {
    //echo "connected";

    $query = "SELECT * FROM Reg_info WHERE Email ='$email' AND Password ='$pass'";
    //print_r($query);
    $result = mysqli_query($con, $query);

    $rowcount=mysqli_num_rows($result);
    //print_r($rowcount);
      if ($rowcount!=1) {

         header("Location: ./error.php");
       }
    else {
      header("Location: ./home.html");
       die();
    }
  
  }

  mysqli_close($con);
  
            

/*$row = mysql_fetch_array($result);
if ($row['email'] == $email && $row['password'] == $password) {
  echo "Login sucess!! Welcome ".$row['email'];
} else {
  echo "Failed to Login!";
    }
    
  }
  
mysqli_close($con);
*/
?>