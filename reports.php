<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Ensure there's no margin around the body */
        }
        header {
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #000;
            position: relative;
        }
        header img {
            width: 50px;
            height: 50px;
            vertical-align: middle;
            position: absolute;
            top: 20px;
        }
        header img.left {
            left: 20px;
        }
        header img.right {
            right: 20px;
        }
        .container {
            margin: 20px;
        }
        .student-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        .total-units-row td {
            border: none;
            text-align: center;
            font-weight: bold;
        }
        .bold {
            font-weight: bold;
            display: block;
            text-align: center;
        }
        .date {
            text-align: right;
            margin-right: 20px;
        }
        .fees-container {
            margin-top: 20px;
        }
        .fees-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .fees-text {
            font-weight: bold;
        }
        .fees-total {
            text-align: right;
            font-weight: bold;
        }
        /* Styling for the Download button */
        #downloadButton {
            background-color: #375737; /* Green color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: fixed;
            bottom: 20px; /* Distance from the bottom of the viewport */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Center align */
        }

        #downloadButton:hover {
            background-color: #4CAF50; /* Darker green color on hover */
        }
    </style>
</head>
<body>
    <?php
        // PHP variables for dynamic content
        $studentID = "21-00727";
        $studentName = "Laggui, Sheela Mae Mesa";
        $semester = "Second Semester, 2023-2024";
        $courseYear = "BSIT 2B";
        $date = "May 16, 2024";
        $subjects = array(
            array("IT 223", "Quantitative Methods", 3, "10:30-12:00", "THF", "IT_AC303", "F.SUIP"),
            array("IT 224", "Integrative Programming and Technologies", 3, "08:00-12:00", "M", "IT-AL104", "V.BALISI"),
            array("IT APPDEV 1", "Fundamentals of Mobile Technology", 3, "08:00-12:00", "T", "IT-AL103", "I.TAPITAN")
        );
        $totalUnits = 9;
        $fees = array(
            array("Student Development", 400.00),
            array("Library Fee", 100.00),
            array("Guidance Fee", 20.00),
            array("School Paper", 50.00),
            array("Internet Fee", 40.00),
            array("Athletic Fee", 50.00),
            array("Journal Fee", 50.00),
            array("Socio-cultural Fee", 25.00),
            array("SBO/SSC/SSCF", 60.00),
            array("Registration Fee", 50.00),
            array("Medical/Dental Fee", 50.00),
            array("Computer Laboratory", 900.00),
            array("Tuition Fee", 900.00),
        );
        $totalFees = 0;
    ?>
    <header>
    <img src="picture/logo.png" alt="Logo 1" class="left">
        <span class="bold">ISABELA STATE UNIVERSITY</span><br>
        <span>Cabagan Campus</span><br>
        <span>Garita, Cabagan, Isabela</span><br><br>
        <span class="bold">ASSESSMENT FORM</span>
        <img src="picture/logoisu.png" alt="Logo 2" class="right">
    </header>
    <div class="container">
        <div class="date">
            <p><?php echo $date; ?></p>
        </div>
        <div class="student-info">
            <div>
                <p>Student ID: <?php echo $studentID; ?></p>
                <p>Name: <?php echo $studentName; ?></p>
            </div>
            <div>
                <p>Semester: <?php echo $semester; ?></p>
                <p>Course & Year: <?php echo $courseYear; ?></p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Description</th>
                    <th>Units</th>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subjects as $subject): ?>
                    <tr>
                        <td><?php echo $subject[0]; ?></td>
                        <td><?php echo $subject[1]; ?></td>
                        <td><?php echo $subject[2]; ?></td>
                        <td><?php echo $subject[3]; ?></td>
                        <td><?php echo $subject[4]; ?></td>
                        <td><?php echo $subject[5]; ?></td>
                        <td><?php echo $subject[6]; ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="total-units-row">
                    <td colspan="2"></td>
                    <td>Total Units: <?php echo $totalUnits; ?></td>
                    <td colspan="4"></td>
                </tr>
            </tbody>
        </table>
        <div class="fees-container">
            <div class="fees-row">
                <span class="fees-text bold">Fees</span>
            </div>
            <?php foreach ($fees as $fee): ?>
                <div class="fees-row">
                    <span><?php echo $fee[0]; ?>:</span>
                    <span style="margin-left: 20px;"><?php echo number_format($fee[1], 2); ?></span>
                </div>
                <?php $totalFees += $fee[1]; ?>
            <?php endforeach; ?>
            <div class="fees-row">
                <span class="fees-text bold">Total Fees:</span>
                <span class="fees-total"><?php echo number_format($totalFees, 2); ?></span>
            </div>
        </div>
    </div>
    <!-- Add a Download button -->
    <button id="downloadButton">Download</button>

    <script>
        // JavaScript for downloading the Assessment Form
        document.getElementById("downloadButton").addEventListener("click", function() {
            // Get the HTML content of the document
            var htmlContent = document.documentElement.outerHTML;

            // Create a blob containing the HTML content
            var blob = new Blob([htmlContent], { type: "text/html" });

            // Create a link element
            var a = document.createElement("a");

            // Set the URL of the link to the blob
            a.href = URL.createObjectURL(blob);

            // Set the filename for the downloaded file
            a.download = "assessment_form.html";

            // Append the link to the body and trigger the download
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(a.href);
        });
    </script>
</body>
</html>
