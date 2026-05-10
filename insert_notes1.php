<?php

$course = $_POST['course'];

$targetDir = "uploads/";

// Auto-create folder
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Correct file variable
$filename = $_FILES["files"]["name"];
$tempname = $_FILES["files"]["tmp_name"];
$targetFile = $targetDir . basename($filename);

// Move file to folder
move_uploaded_file($tempname, $targetFile);

// DB
$conn = new mysqli("localhost", "root", "", "application");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// INSERT correct variable
$sql = "INSERT INTO notes (course, notes) VALUES ('$course', '$filename')";

if ($conn->query($sql) === TRUE) {
    $success = true;
} else {
    $success = false;
    $error = "Error: " . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Notes</title>
    <link rel="stylesheet" href="insert_notes.css">
</head>
<body>
    <div class="input-box">
        <?php if($success) { ?>
            <div class="title">
                <h1>✓ Success</h1>
                <h2>Notes added successfully</h2>
            </div>
            <div class="message-container">
                <p class="success-message">The notes have been uploaded to the database.</p>
            </div>
        <?php } else { ?>
            <div class="title">
                <h1>✗ Error</h1>
            </div>
            <div class="message-container">
                <p class="error-message"><?php echo $error; ?></p>
            </div>
        <?php } ?>
        
        <a href="insert_notes.php" class="back-button">← Back</a>
    </div>
</body>
</html>
