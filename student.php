<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Student Information</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Add New Student Section -->
                <div class="mt-4">
                    <form method="post">
                        <div class="form-group">
                            <label for="student_id">Student ID</label>
                            <input type="text" class="form-control" id="student_id" name="student_id" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_initial">Middle Initial</label>
                            <input type="text" class="form-control" id="middle_initial" name="middle_initial" required>
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option value="BSIT">BSIT</option>
                                <option value="BSCS">BSCS</option>
                                <option value="BSCPE">BSCPE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" name="create">Add Student</button>
                    </form>
                </div>
                
                <!-- Student Records Table -->
                <div class="mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Initial</th>
                                <th>Course</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Initialize students array or retrieve from session
                            session_start();
                            if (!isset($_SESSION['students'])) {
                                $_SESSION['students'] = [
                                    ["21-00727", "Laggui", "Sheela Mae", "M.", "BSIT", "Female", 20],
                                    ["21-01314", "Osabal", "Maui", "M.", "BSIT", "Female", 21],
                                    ["21-01746", "Zipagan", "Chabelita", "M.", "BSIT", "Female", 22],
                                ];
                            }

                            // Check if form is submitted
                            if (isset($_POST['create'])) {
                                // Retrieve form data
                                $student_id = $_POST['student_id'];
                                $lastname = $_POST['lastname'];
                                $firstname = $_POST['firstname'];
                                $middle_initial = $_POST['middle_initial'];
                                $course = $_POST['course'];
                                $gender = $_POST['gender'];
                                $age = $_POST['age'];

                                // Add new student data to the records array
                                $new_student = [$student_id, $lastname, $firstname, $middle_initial, $course, $gender, $age];
                                $_SESSION['students'][] = $new_student;
                            }

                            // Delete student record
                            if (isset($_POST['delete'])) {
                                $index = $_POST['delete'];
                                unset($_SESSION['students'][$index]);
                                $_SESSION['students'] = array_values($_SESSION['students']); // Re-index array
                            }

                            // Display student records
                            foreach ($_SESSION['students'] as $index => $student) {
                                echo "<tr>";
                                foreach ($student as $detail) {
                                    echo "<td>{$detail}</td>";
                                }
                                echo "<td>
                                        <form method='post'>
                                            <input type='hidden' name='delete' value='$index'>
                                            <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                                        </form>
                                      </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
