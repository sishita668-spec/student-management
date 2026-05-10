<?php
session_start();

// Check if student is logged in
if (!isset($_SESSION['student_id'])) {
    header("Location: studentlogin.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get notes for student's course
$course_id = $_SESSION['student_course'];
$sql = "SELECT * FROM notes WHERE course = '$course_id'";
$result = $conn->query($sql);
$notes = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notes[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Notes</title>
    <link rel="stylesheet" href="notes.css">
</head>
<body>
    <div class="container">
        <!-- Welcome Header -->
        <div class="welcome-section">
            <h1>✓ Login Successful</h1>
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['student_name']); ?>!</h2>
            <p class="email">Email: <?php echo htmlspecialchars($_SESSION['student_email']); ?></p>
        </div>

        <!-- Notes Section -->
        <div class="notes-section">
            <div class="section-header">
                <h3>📚 Course Notes</h3>
            </div>

            <?php if (count($notes) > 0) { ?>
                <div class="notes-list">
                    <?php foreach($notes as $note) { ?>
                        <div class="note-card">
                            <div class="note-header">
                                <span class="note-icon">📄</span>
                                <span class="note-name"><?php echo htmlspecialchars($note['notes']); ?></span>
                            </div>
                            <div class="note-actions">
                                <a href="uploads/<?php echo htmlspecialchars($note['notes']); ?>" 
                                   download class="download-btn">
                                    ⬇ Download
                                </a>
                                <a href="uploads/<?php echo htmlspecialchars($note['notes']); ?>" 
                                   target="_blank" class="view-btn">
                                    👁 View
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="no-notes">
                    <p>No notes available for your course yet.</p>
                </div>
            <?php } ?>
        </div>

        <!-- Logout Section -->
        <div class="logout-section">
            <a href="studentlogin.html" class="logout-btn">← Logout</a>
        </div>
    </div>
</body>
</html>
<?php
$conn->close();
?>
