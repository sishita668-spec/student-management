
<?php
// ---------------------------
// 1. CONNECT TO DATABASE
// ---------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ---------------------------
// 2. FETCH COURSES FROM TABLE
// ---------------------------
$sql = "SELECT cid, name FROM course";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en" style="background-color: #FFEB3B !important; background: #FFEB3B !important;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        html { background-color: #FFEB3B !important; background: #FFEB3B !important; }
        body { background-color: #FFEB3B !important; background: #FFEB3B !important; margin: 0 !important; padding: 0 !important; min-height: 100vh !important; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="insert_student.css">
</head>
<body style="background-color: #FFE082 !important; background: #FFE082 !important;">

<form action="insert_student.php" method="post">

    <div class="input-box">
        <div class="title">
            <h1>ADD NEW STUDENT</h1>
            <h2>Enter Student Details</h2>
        </div>

        <label class="label-color">Name</label>
        <input type="text" name="name" placeholder="Name" required>
        <br>

        <label class="label-color">Email</label>
        <input type="email" name="mail" placeholder="Email" required>
        <br>

        <label class="label-color">Password</label>
        <input type="password" name="pwd" placeholder="Password" required>
        <br>

        <label class="label-color">Course</label>
        <select name="course" class="form-control" required>
            <option value="">Select Course</option>

            <?php
            // Loop through all courses
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { 
                    echo "<option value='{$row['cid']}'>{$row['name']}</option>";
                }
            } else {
                echo "<option>No Courses Available</option>";
            }
            ?>
        </select>

        <br>

        <input type="submit" class="login" value="Add">
    </div>

</form>

</body>
</html>
