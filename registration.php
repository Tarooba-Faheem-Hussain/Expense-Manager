<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$Username =$_POST['username'];
$Email =$_POST['email'];
$Password =$_POST['psw'];

$sql = "INSERT INTO registrationdb (Username,Email,Password)" . "VALUES ('$Username','$Email','$Password')";
if (mysqli_query($conn, $sql))
{
  header("Location: loginform.php");
// echo " <p>Congratulations!</p>congratulations you are successfully registered.... </div>"; 
}
   else 
  { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
  }


?>


