<?php 
	include '../config.php';
	$masp = $_GET["masanpham"];
	$trangthai = $_GET["trangthai"];
	$sqlsuatrangthai = "";
	if($trangthai == "0")
		$sqlsuatrangthai = "UPDATE sanpham SET trangthaisanpham = 1 WHERE masanpham = '$masp'";
	else
		$sqlsuatrangthai = "UPDATE sanpham SET trangthaisanpham = 0 WHERE masanpham = '$masp'";
	if($conn->query($sqlsuatrangthai)){
		echo "<script>alert(\"Cập nhật trạng thái thành công\"); 
					window.location.href = 'listproduct.php';
				</script>";
	}
	else
		echo "haha";
	$conn->close(); 
?>