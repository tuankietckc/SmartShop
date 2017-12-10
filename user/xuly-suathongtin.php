<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý sửa thông tin</title>
</head>
<body>
	<?php 
	session_start();
	if(!empty($_GET['btncapnhat'])){
		$hoten = $_GET["txtHotencapnhat"];
		$email = $_GET["txtEmailcapnhat"];
		$taikhoan = $_GET["txtTaiKhoan"];
		$sqlcapnhatthongtin = "UPDATE `nguoidung` SET `HoTen`= '$hoten', `Emai` = '$email' WHERE `TenTaiKhoan` = '$taikhoan'";
		$ketqua = $conn->query($sqlcapnhatthongtin);
		$_SESSION["TenKhachHang"] =$hoten;
		header('Location: profile.php?taikhoan='.$taikhoan);
	}
	?>
</body>
</html>