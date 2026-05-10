<?php
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * from teacher where email='$mail' AND pasword='$pwd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo" LOGIN SUCCESFULL";
    header("Location: dashboard.php");
  }
 else {
  echo "INVALID USERNAME OR PASSWORD";
}
$conn->close();
?>