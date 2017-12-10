<?php include 'header.php' ?>
<?php 
    $taikhoan = $_GET['taikhoan'];
    $hoten = null;
    $email = null;
    $trangthai = null;
    $loaitaikhoan = null;
    $sqlnguoidung = "SELECT * FROM `nguoidung` WHERE `TenTaiKhoan` = '$taikhoan'";
    $ketqua = $conn->query($sqlnguoidung);
    if($ketqua->num_rows > 0)
    {
        while($row = $ketqua->fetch_assoc())
        {
            $hoten = $row["HoTen"];
            $email = $row["Emai"];
            $trangthai = $row["TrangThai"];
            $loaitaikhoan = $row["LoaiTaiKhoan"];   
        }
       
    }
?>
<div class="panel-heading">
        <h3>Cập nhật thông tin</h3>
    </div>
    <form method="GET" action="xuly-suathongtin.php">
    <div class="panel-body">
        <!--Tên-->
        <div class="thongtin">
                <!--Thông tin-->
                <div class="tenkhachhang form-group">
                    <label>Họ tên:</label>
                    <input name="txtHotencapnhat" type="text" value='<?= $hoten ?>' class="form-control" />
                </div>
                <div class="emailkhachang form-group">
                    <label>Email:</label>
                    <input name="txtEmailcapnhat" type="email" value='<?= $email ?>' class="form-control" />
                </div>
                    <input name="txtTaiKhoan" type="hidden" value='<?= $taikhoan ?>' class="form-control" />
        <br />
        <input type="submit" name="btncapnhat" class="btn btn-success" value="Cập nhật thông tin">
    </div>
    </form>
    <?php var_dump($_GET) ?>
    <?php include 'xuly-suathongtin.php' ?>
<?php include 'footer.php' ?>