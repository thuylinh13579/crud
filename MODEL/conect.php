<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "db_fashion_mylishop";

	// Create connection
	$conn = mysqli_connect($host, $user, $password, $database);
		if(!$conn){
			echo 'error';
		}
	mysqli_set_charset($conn, 'UTF8');
	
	// // Check connection
	// if (!$conn) {
    // 	die("Connection failed: " . mysqli_connect_error());
	// }
	// // echo "Connected successfully";
?>