<?php 
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
	// Tạo kết nối
	$conn = new mysqli($servername,$username,$password,$database);
	// Kiểm tra kết nối
	if($conn -> connect_error){
		 die("Không thể kết nối tới Database: " . $conn->connect_error);
	}

?>