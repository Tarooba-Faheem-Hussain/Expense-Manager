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
$Email =$_POST['email'];
$Password =$_POST['psw'];

$sql = "INSERT INTO logindb (Email, Password)" . "VALUES ('$Email','$Password')";
echo $sql;
die();
 
if (mysqli_query($conn, $sql))
{
  header("Location: Expense-Manager.php");
}
   else 
  
 { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
 
  }

?>



