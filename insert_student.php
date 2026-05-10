<?php

$name=$_POST['name'];
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];
$course=$_POST['course'];

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
    $d="INSERT INTO student (name,email_id,password,cid)
    VALUES ('$name','$mail','$pwd','$course')";

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
    <title>Add Student</title>
    <link rel="stylesheet" href="insert_student.css">
</head>
<body>
    <div class="input-box">
        <?php if($success) { ?>
            <div class="title">
                <h1>✓ Success</h1>
                <h2>Student added successfully</h2>
            </div>
            <div class="message-container">
                <p class="success-message">The student has been added to the database.</p>
            </div>
        <?php } else { ?>
            <div class="title">
                <h1>✗ Error</h1>
            </div>
            <div class="message-container">
                <p class="error-message"><?php echo $error; ?></p>
            </div>
        <?php } ?>
        
        <a href="insert_student1.php" class="back-button">← Back</a>
    </div>
</body>
</html>
