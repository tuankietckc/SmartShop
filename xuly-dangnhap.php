<?php 
include 'config.php';
session_start();
$_SESSION["TenKhachHang"] = null;
		if($_POST['username'] =="" || $_POST['password'] =='' )
		{
			echo "Đăng nhập thất bại!!!!!!";
		}
		else
		{
			$taikhoan = $_POST['username'];
			$matkhau = $_POST['password'];
			$sql = "SELECT * FROM `nguoidung` WHERE TenTaiKhoan = '$taikhoan' AND MatKhau = '$matkhau' AND TrangThai = 1";
			$ketqua = $conn->query($sql);
			if($ketqua->num_rows > 0)
			{
				while($row = $ketqua->fetch_assoc())
				{
					$_SESSION["TenKhachHang"] = $row["HoTen"];
				}
			}
			$conn->close();
		}
 ?>