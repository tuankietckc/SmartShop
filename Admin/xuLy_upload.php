<?php
include '../config.php';
$TenSP = $_POST["txttensp"];
$MoTa = $_POST["txtmota"];
$SoLuong = $_POST["txtsoluong"];
$DonGia = $_POST["txtdongia"];
$LoaiSP  = $_POST["LoaiSP"];
$NCC = $_POST["NhaCC"];
$sql_DemSanPham = "Select * from SanPham";
$kq = $conn->query($sql_DemSanPham);
$MaSP = $kq->num_rows + 1;
$NoiLuu = '../HinhAnh';
$tmp_name = $_FILES["fileanhdaidien"]["tmp_name"];
$TenFile = basename($_FILES["fileanhdaidien"]["name"]);
if(move_uploaded_file($tmp_name, "$NoiLuu/$TenFile"))
{
	$HinhDaiDien = $NoiLuu."/".$TenFile;
	$sql_ThemSP = "INSERT INTO sanpham(masanpham, tensanpham, mota, hinhanh, soluong, dongia, loaisanpham, Mancc, trangthaisanpham) VALUES ('$MaSP','$TenSP','$MoTa','$HinhDaiDien','$SoLuong','$DonGia','$LoaiSP','$NCC','1')";
	if($conn->query($sql_ThemSP))
	{
		echo "Thêm sản phảm thành công";
	}
	else
	{
		echo "Error: ".$sql."<br>".$conn->Error;
	}
	$conn->close();
}
else
{
	echo "upload thất bại";
}




?>