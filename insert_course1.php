<?php
$id=$_POST['id'];
$name=$_POST['name'];
$fees=$_POST['fees'];

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
    $d="INSERT INTO course (Cid,name, fees)
      VALUES ('$id', '$name', '$fees')";

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
    <title>Add Course</title>
    <link rel="stylesheet" href="insert_course.css">
</head>
<body>
    <div class="input-box">
        <?php if($success) { ?>
            <div class="title">
                <h1>✓ Success</h1>
                <h2>Course added successfully</h2>
            </div>
            <div class="message-container">
                <p class="success-message">The course has been added to the database.</p>
            </div>
        <?php } else { ?>
            <div class="title">
                <h1>✗ Error</h1>
            </div>
            <div class="message-container">
                <p class="error-message"><?php echo $error; ?></p>
            </div>
        <?php } ?>
        
        <a href="insert_course.php" class="back-button">← Back</a>
    </div>
</body>
</html>