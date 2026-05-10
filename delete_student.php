<?php
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
    $d="DELETE FROM student  WHERE email_id='$mail'";;

    if ($conn->query($d) == TRUE) {
        $success = true;
    } else {
        $success = false;
        $error = "Error: " . $d. "<br>" . $conn->error;
    }
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <link rel="stylesheet" href="delete_student.css">
</head>
<body>
    <div class="input-box">
        <?php if($success) { ?>
            <div class="title">
                <h1>✓ Success</h1>
                <h2>Student record deleted successfully</h2>
            </div>
            <div class="message-container">
                <p class="success-message">The student record has been removed from the database.</p>
            </div>
        <?php } else { ?>
            <div class="title">
                <h1>✗ Error</h1>
            </div>
            <div class="message-container">
                <p class="error-message"><?php echo $error; ?></p>
            </div>
        <?php } ?>
        
        <a href="delete_student1.php" class="back-button">← Back</a>
    </div>
</body>
</html>