<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="select_course.css?v=2">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="details-container">
        <?php
        if (isset($_POST['name'])) {
            $b = $_POST['name'];

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
            
            $stmt = $conn->prepare("SELECT * FROM course WHERE name = ?");
            $stmt->bind_param("s", $b);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="details-card">
                        <div class="details-header">
                            <h1>COURSE DETAILS</h1>
                        </div>
                        <div class="details-body">
                            <div class="detail-item">
                                <span class="detail-label">Course ID:</span>
                                <span class="detail-value">' . htmlspecialchars($row["cid"] ?? $row["Cid"] ?? "") . '</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Course Name:</span>
                                <span class="detail-value">' . htmlspecialchars($row["name"]) . '</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Course Fees:</span>
                                <span class="detail-value">₹' . htmlspecialchars($row["fees"]) . '</span>
                            </div>
                        </div>
                        <div class="details-footer">
                            <a href="select_course.php" class="back-btn">Back to Search</a>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '
                <div class="no-results">
                    <h2>No Course Found</h2>
                    <p>No course with this name exists in the system.</p>
                    <a href="select_course.php" class="back-btn">Back to Search</a>
                </div>
                ';
            }
            $stmt->close();
            $conn->close();
        } else {
            echo '
            <div class="no-results">
                <h2>No Course Selected</h2>
                <p>Please search for a course first.</p>
                <a href="select_course.php" class="back-btn">Back to Search</a>
            </div>
            ';
        }
        ?>
    </div>
</body>
</html>

