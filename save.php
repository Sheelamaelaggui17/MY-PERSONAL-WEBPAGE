<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Course Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="save.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <label for="course_code">Course Code:</label>
            <input type="text" id="course_code" name="course_code" value="<?php echo $_GET['code']; ?>">
            <label for="course_name">Course:</label>
            <input type="text" id="course_name" name="course_name" value="<?php echo $_GET['name']; ?>">
            <input type="submit" value="Save">
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $course_code = $_POST['course_code'];
        $course_name = $_POST['course_name'];
        // Logic to save updated data. For now, just display the updated data.
        echo "<div class='container'><p>Record updated:</p>";
        echo "<p>Number: $id</p>";
        echo "<p>Course Code: $course_code</p>";
        echo "<p>Course: $course_name</p></div>";
    }
    ?>
</body>
</html>
