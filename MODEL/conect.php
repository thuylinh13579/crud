<?php
	$host = "localhost";//địa chỉ local
	$user = "root";
	$password = "";
	$database = "db_fashion_mylishop";//tên data

	// Create connection
	$conn = mysqli_connect($host, $user, $password, $database); //kết nối dữ liệu 
	
		if(!$conn){
			echo 'error';
		}
		mysqli_set_charset($conn, 'UTF8'); //mã hóa dữ liệu
	// // Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	// // echo "Connected successfully";
?>