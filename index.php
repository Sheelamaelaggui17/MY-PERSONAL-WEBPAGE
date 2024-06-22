<?php
session_start();
require 'conn.php';

if (isset($_SESSION['valid'])) 
{
  header("location: index.php");
}


if (isset($_POST['submit'])) 
{
    
     $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
     

      $query = "SELECT * FROM student_table WHERE username='$username' AND password='$password'";
       $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        

         $count = mysqli_num_rows($result);

     if ($count == 1)
     {
       
        $_SESSION['valid']=$username;
        header("location: studentportal/home.php");
        exit();
                
     } 
     else 
       {
         $_SESSION["errorMessage"] = "Username or Password is Incorrect! Try again!";
                header("location: index.php");
                exit();
               
       }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .background {
            background-image: url("plain-background.jpg");
            position: relative;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form {
           
        }
    </style>
    <style>
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.menu {
    overflow: hidden;
    background-color: #375737;
}
.menu h5 {
    float: left;
    display: block;
    color: #000000;
    text-align: center;
    padding: 10px;
    text-decoration: none; 
    color: white;
}
.menu a:hover {
    background-color: #375737;
    color: rgb(255, 255, 255);
}
.content {
    padding: 20px;
    display: none;
    position: relative;
}
.content.active {
    display: block;
}
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
    line-height: 16px;
    padding: 4px 8px;
}
@media screen and (max-width: 800px) {
    .menu a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<div class="menu">
<h5>Student Automated Registration Information System</h5>
</div>

<body class="hold-transition login-page background">
<div class="container-fluid vh-100" style="margin-top:150px">
    <div class="" style="margin-top:100px">
        <div class="rounded d-flex justify-content-center">
            <div class="form col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 style="font-weight: bold; color: #000000;">Login your account!</h3>
                </div>
                <form method="post">

                     <center>
         <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message" style="color: white; background-color: #375737; width: 85%; border-radius: 10px; padding: 10px 10px;"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>   </center>        

                    <div class="p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #375737;"><i
                                        class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class="form-control" placeholder="password" name="password" required>
                        </div>
                        <button type="submit" name="submit" style="background-color: #375737; color: white;"
                                class="btn text-center mt-4 col-md-12">
                            Sign In <i class="bi bi-box-arrow-in-right text-white"></i>
                        </button><hr>
                        <div class="text-center"><span><a>Application for New Student</a></span>
                        <a href="signup.php" class="mt-4">Register Here</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>