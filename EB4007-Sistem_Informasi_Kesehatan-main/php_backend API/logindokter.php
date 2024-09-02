<?php

	$username_dokter = $_POST['username_dokter'];
	$password_dokter = $_POST['password_dokter'];
	
	$con = mysqli_connect("localhost", "root", "", "websitepuskemas");
	
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:".mysqli_connect_error();
		exit();
	}
	
	$query = "SELECT * FROM akundokter WHERE username_dokter = '$username_dokter'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	
	if ($username_dokter != $row['username_dokter']){
		header('Location: loginstaf.html');
		exit;
	}
	else {
		session_start();
		$_SESSION["username_dokter"] = $username_dokter;
		$_SESSION["password_dokter"] = $password_dokter;
		
		header('Location: menudokter.html');
		exit;
	}

	mysqli_close($con);
?>