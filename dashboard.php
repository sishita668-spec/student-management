<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css?v=10">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="content">
        <h2>Welcome to Teacher Dashboard</h2>
    </div>

    <div class="menu">☰</div>

    <div class="sidebar">
        <a href="stlogin.html">Logout</a>

        <label class="course">Course:</label>
        <a href="dashboard.php?page=select_course">Select course</a>
        <a href="dashboard.php?page=update_course">Update course</a>
        <a href="dashboard.php?page=delete_course">Delete course</a>
        <a href="dashboard.php?page=insert_course">Add course</a>

        <label class="student">Student:</label>
        <a href="dashboard.php?page=select_student1">Select student</a>
        <a href="dashboard.php?page=update_student1">Update student</a>
        <a href="dashboard.php?page=delete_student1">Delete student</a>
        <a href="dashboard.php?page=insert_student1">Add student</a>

        <label class="notes">Notes:</label>
        <a href="dashboard.php?page=insert_notes">Add notes</a>
         

    </div> 


    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page == "select_student1")  include("select_student1.php");
        if ($page == "update_student1") include("update_student1.php");
        if ($page == "delete_student1") include("delete_student1.php");
        if ($page == "insert_student1") include("insert_student1.php");

        if ($page == "select_course")  include("select_course.php");
        if ($page == "update_course") include("update_course.php");
        if ($page == "delete_course") include("delete_course.php");
        if ($page == "insert_course") include("insert_course.php");

        if ($page == "insert_notes") include("insert_notes.php");
    }

    ?>
</body>
</html>
