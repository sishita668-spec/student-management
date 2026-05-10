<?php
$new=$_POST['new'];
$confirm=$_POST['confirm'];
$mail=$_POST['mail'];


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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="update_student.css">
</head>
<body>

<div class="input-box">
    <div class="title">
        <h1>PASSWORD UPDATE</h1>
    </div>

    <?php
    if($new==$confirm)
        {
                $sql = "SELECT * from student where email_id='$mail' ";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                    {

                         $s = "UPDATE student SET password='$confirm' WHERE email_id='$mail'";

                                if ($conn->query($s) === TRUE) {
                                echo "<p class='success-message'>✓ Password changed successfully</p>";
                                } else {
                                echo "<p class='error-message'>✗ Error: " . $conn->error . "</p>";
                                }
                    }
      
                    else
                    {
                    echo "<p class='error-message'>✗ INVALID USERNAME</p>";
                    }
        }
    else
        {
        echo "<p class='error-message'>✗ Passwords don't match</p>";
        }
    $conn->close();
    ?>

    <a href="update_student1.php" class="back-btn">← Back</a>
</div>

</body>
</html>