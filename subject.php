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
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Subject Information</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject code</th>
                                <th>Description</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Define the subjects and their details
                            $allSubjects = [
                                ['code' => 'subject1', 'description' => 'IT GE ELEC 4 - The Entrepreneurial Mind', 'units' => 3],
                                ['code' => 'subject2', 'description' => 'GEC 9 - The Life and Works of Rizal', 'units' => 3],
                                ['code' => 'subject3', 'description' => 'IT 221 - Information Management', 'units' => 3],
                                ['code' => 'subject4', 'description' => 'IT 222 - Networking 1', 'units' => 3],
                                ['code' => 'subject5', 'description' => 'IT 223 - Quantitative Methods', 'units' => 3],
                                ['code' => 'subject6', 'description' => 'IT 224 - Integrative Programming and Technologies', 'units' => 3],
                                ['code' => 'subject7', 'description' => 'IT 225 - Accounting for Information Management', 'units' => 3],
                                ['code' => 'subject8', 'description' => 'IT APPDEV 1 - Fundamentals of Mobile Technology', 'units' => 3],
                            ];

                            $totalUnits = 0; // Initialize total units variable

                            // Check if subjects were selected and process them
                            if (isset($_POST['subject'])) {
                                foreach ($_POST['subject'] as $selectedSubject) {
                                    // Find the corresponding subject details
                                    foreach ($allSubjects as $subject) {
                                        if ($subject['code'] === $selectedSubject) {
                                            echo "<tr>";
                                            echo "<td>{$subject['code']}</td>";
                                            echo "<td>{$subject['description']}</td>";
                                            echo "<td>{$subject['units']}</td>";
                                            echo "</tr>";
                                            $totalUnits += $subject['units']; // Add units to total
                                            break; // Stop searching once found
                                        }
                                    }
                                }
                            }

                            // Display total units row
                            echo "<tr>";
                            echo "<td colspan='2' class='text-end'><strong>Total Units:</strong></td>";
                            echo "<td><strong>{$totalUnits}</strong></td>";
                            echo "</tr>";
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

</body>
</html>
