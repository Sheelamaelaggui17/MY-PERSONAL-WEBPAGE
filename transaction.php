<!DOCTYPE html>
<html>
<head>
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            background-color: #ffffff; /* White background color */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 800px; /* Set width to 800px */
            background: #ffffff; /* White background for the container */
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 0 auto; /* Center container horizontally */
        }
        .btn-dark-gray {
            background-color: #505050; /* Dark gray background for the button */
            color: #ffffff; /* White text color */
            border-color: #404040; /* Dark gray border color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 mx-auto">
                <form action="subject.php" method="post"> <!-- Updated action to subject.php -->
                    <h4 class="display-4 text-center">Enrollment Form</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th> <!-- Empty header for checkboxes -->
                                <th>Code</th>
                                <th>Description</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Your subject rows with checkboxes -->
                             <!-- Row 1 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject1"></td>
                                <td>IT GE ELEC 4</td>
                                <td>The Entrepreneurial Mind</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 2 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject2"></td>
                                <td>GEC 9</td>
                                <td>The Life and Works of Rizal</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 3 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject3"></td>
                                <td>IT 221</td>
                                <td>Information Management</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 4 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject4"></td>
                                <td>IT 222</td>
                                <td>Networking 1</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 5 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject5"></td>
                                <td>IT 223</td>
                                <td>Quantitative Methods</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 6 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject6"></td>
                                <td>IT 224</td>
                                <td>Integrative Programming and Technologies</td>
                                <td>3</td>
                            </tr>
                            <!-- Row 7 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject7"></td>
                                <td>IT 225</td>
                                <td>Accounting for Information Management</td>
                                <td>3</td>
                            </tr>   
                            <!-- Row 8 -->
                            <tr>
                                <td><input type="checkbox" name="subject[]" value="subject8"></td>
                                <td>IT APPDEV 1</td>
                                <td>Fundamentals of Mobile Technology</td>
                                <td>3</td>
                            </tr>   

                        </tbody>
                    </table>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark-gray" name="enroll">Enroll</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>