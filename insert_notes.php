<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT cid, name FROM course";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="insert_notes.css">
    
</head>
<body>
            <form action="insert_notes1.php"  method="post" enctype="multipart/form-data">
                            
                  <div class="input-box">    
                     <div class="title">
                        <h1>ADD NOTES</h1>
                     </div>

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

                  
                        <label for="file" class="label-color">Notes</label>
                        <input type="file" name="files" id="number" placeholder="Notes" required> 
                        
                        <br>
                        <input type="submit" class="login" value="Add">
                     </div>   
                      

</body>
</html>