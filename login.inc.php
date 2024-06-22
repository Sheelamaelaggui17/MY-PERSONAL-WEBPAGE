<?php

require '../conn.php';

if(isset($_SESSION['valid']))   
 {
    header("Location: studentportal/home.php"); 
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
	 	 $_SESSION['valid']=true;
	 	 $username = $row['valid'];
	 	$_SESSION['valid']=$username;

		 $success = "You have Successfully Log In.";
                echo "<script>alert('$success'); window.location.href='../studentportal/home.php';</script>";   
                exit();
	 } 
	 else 
       {
                $error = "Username or Password is Incorrect! Try again!";
                echo "<script>alert('$error'); window.location.href='../index.php';</script>";   
                exit();
       }

	


	
}