<?php

	$username_admin = $_POST['username_admin'];
	$password_admin = $_POST['password_admin'];
	
	$con = mysqli_connect("localhost", "root", "", "websitepuskemas");
	
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:".mysqli_connect_error();
		exit();
	}
	
	$query = "SELECT * FROM akunadministrasi WHERE username_admin = '$username_admin'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	
	if ($username_admin != $row['username_admin']){
		header('Location: loginstaf.html');
		exit;
	}
	else {
		session_start();
		$_SESSION["username_admin"] = $username_admin;
		$_SESSION["password_admin"] = $password_admin;
		
		header('Location: menuadmin.html');
		exit;
	}

	mysqli_close($con);
?>