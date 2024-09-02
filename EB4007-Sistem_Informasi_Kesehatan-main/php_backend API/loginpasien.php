<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$con = mysqli_connect("localhost", "root", "", "websitepuskemas");
	
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:".mysqli_connect_error();
		exit();
	}
	
	$query = "SELECT * FROM akunpasien WHERE username = '$username'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	
	if ($username != $row['username']){
		header('Location: loginpasien.html');
		exit;
	}
	else {
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		
		header('Location: menupasien.html');
		exit;
	}

	mysqli_close($con);
?>