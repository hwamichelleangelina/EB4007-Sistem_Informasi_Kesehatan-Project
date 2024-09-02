<?php

	$username_farmasi = $_POST['username_farmasi'];
	$password_farmasi = $_POST['password_farmasi'];
	
	$con = mysqli_connect("localhost", "root", "", "websitepuskemas");
	
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:".mysqli_connect_error();
		exit();
	}
	
	$query = "SELECT * FROM akunfarmasi WHERE username_farmasi = '$username_farmasi'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	
	if ($username_farmasi != $row['username_farmasi']){
		header('Location: loginstaf.html');
		exit;
	}
	else {
		session_start();
		$_SESSION["username_farmasi"] = $username_farmasi;
		$_SESSION["password_farmasi"] = $password_farmasi;
		
		header('Location: menufarmasi.html');
		exit;
	}

	mysqli_close($con);
?>