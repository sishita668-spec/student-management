<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="select_student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="details-container">
        <?php
        if (isset($_POST['mail'])) {
            $mail = $_POST['mail'];

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
            
            $sql = "SELECT * FROM student where email_id= '$mail'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="details-card">
                        <div class="details-header">
                            <h1>STUDENT DETAILS</h1>
                        </div>
                        <div class="details-body">
                            <div class="detail-item">
                                <span class="detail-label">Name:</span>
                                <span class="detail-value">' . htmlspecialchars($row["name"]) . '</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Email ID:</span>
                                <span class="detail-value">' . htmlspecialchars($row["email_id"]) . '</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Password:</span>
                                <span class="detail-value">' . htmlspecialchars($row["password"]) . '</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Course ID:</span>
                                <span class="detail-value">' . htmlspecialchars($row["cid"]) . '</span>
                            </div>
                        </div>
                        <div class="details-footer">
                            <a href="select_student1.php" class="back-btn">Back to Search</a>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '
                <div class="no-results">
                    <h2>No Student Found</h2>
                    <p>No student with this email ID exists in the system.</p>
                    <a href="select_student1.php" class="back-btn">Back to Search</a>
                </div>
                ';
            }
            $conn->close();
        }
        ?>
    </div>
</body>
</html>

