<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'techie');

	// initialize variables
	$username = "";
	$password = "";

;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		mysqli_query($db, "INSERT INTO login (username, password) VALUES ('$username', '$password')"); 
		$_SESSION['message'] = "Sucessfully logged in"; 
		header('location: welcome.php');
    }
    
?>