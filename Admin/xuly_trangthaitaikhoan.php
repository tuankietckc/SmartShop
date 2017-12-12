<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý trạng thái tài khoản</title>
</head>
<body>
	<?php 
	include '../config.php';
	$taikhoan = $_GET["tentaikhoan"];
	$trangthai = $_GET["trangthai"];
	var_dump($taikhoan);
	var_dump($trangthai);
	$sqlsuatrangthai = "";
	if($trangthai == "0")
		$sqlsuatrangthai = "UPDATE nguoidung SET TrangThai = 1 WHERE TenTaiKhoan = '$taikhoan'";
	else
		$sqlsuatrangthai = "UPDATE nguoidung SET TrangThai = 0 WHERE TenTaiKhoan = '$taikhoan'";

	if($conn->query($sqlsuatrangthai)){
		echo "<script>alert(\"Cập nhật trạng thái thành công\"); 
					window.location.href = 'listaccount.php';
				</script>";
	}
	else
		echo "haha";
	$conn->close(); 
?>
</body>
</html>