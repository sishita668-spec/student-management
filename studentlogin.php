<?php
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from student where email_id='$mail' AND password='$pwd' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
    session_start();
    $_SESSION['student_id'] = $student['id'];
    $_SESSION['student_name'] = $student['name'];
    $_SESSION['student_email'] = $student['email_id'];
    $_SESSION['student_course'] = $student['cid'];
    
    // Redirect to notes page
    header("Location: notes.php");
    exit();
} else {
    $error = "INVALID USERNAME OR PASSWORD";
    header("Location: studentlogin.html?error=" . urlencode($error));
    exit();
}
$conn->close();
?>