<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Course</title>
    <style>
        /* Global Page Style */
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: #fff7d1; /* soft yellow */
        }

        /* Message Container */
        .message-box {
            width: 500px;
            margin: 100px auto;
            padding: 50px;
            background-color: #000; /* black box */
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.3);
            text-align: center;
        }

        /* Success Message */
        .success {
            color: #00ff00;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        /* Error Message */
        .error {
            color: #ff4444;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        /* Back Button */
        .back-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #ffcc00;
            color: #000;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
            border: none;
        }

        .back-btn:hover {
            background-color: #e6b800;
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .message-box {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<?php
$name=$_POST['name'];
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
    $d="DELETE FROM course  WHERE name= '$name'";

    if ($conn->query($d) == TRUE) {
    ?>
    <div class="message-box">
        <div class="success">✓ Course Record Deleted Successfully</div>
        <a href="delete_course.php" class="back-btn">Back</a>
    </div>
    <?php
    } else {
    ?>
    <div class="message-box">
        <div class="error">✗ Error: <?php echo $conn->error; ?></div>
        <a href="delete_course.php" class="back-btn">Back</a>
    </div>
    <?php
    }
    $conn->close();
?>

</body>
</html>