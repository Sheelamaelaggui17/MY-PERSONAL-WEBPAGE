<?php

require '../conn.php';

if (isset($_POST['submit'])) 
{
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO `student_table`(`firstname`, `middlename`, `lastname`, `email`, `number`, `username`, `password`) VALUES ('$firstname','$middlename','$lastname','$email','$number','$username','$password')";

	 if (mysqli_query($conn, $sql)) 
	 {
		 $success = "You have Successfully Created an Account.";
                echo "<script>alert('$success'); window.location.href='../index.php';</script>";   
                exit();
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}