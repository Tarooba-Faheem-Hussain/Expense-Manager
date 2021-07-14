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
$Subject =$_POST['subject'];
$Message =$_POST['message'];


$sql = "SELECT id FROM user WHERE Email = '$Email' ";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

   
  $sql = "INSERT INTO contact_us (Email,Subject,Message)" . "VALUES ('$Email','$Subject','$Message')";
  if (mysqli_query($conn, $sql))
  {
    //header("Location: index.php");
   echo " Successfully Submitted! "; 
  }
     else 
    { 
  echo "Error "; 
    }



?>


