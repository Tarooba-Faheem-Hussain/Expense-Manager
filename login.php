<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="expense_manager";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$Email =$_POST['email'];
$Password =$_POST['psw'];

$sql = "SELECT id FROM user WHERE Email = '$Email' and Password = '$Password'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


if ($count>0 )
{
  header("Location: Expense-Manager.php");
}
   else 
  
 { 
echo "Error: User does not exist!"; 
 
  }

?>



