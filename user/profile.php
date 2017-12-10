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
            <nav class="navbar navbar-inverse" style="background:#337ab7;border-color:rgba(51, 73, 183, 0.92);">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            
                            <li><a href='../index.php'>Trang chủ</a></li>
                            <li><a href='Profile.aspx?tentaikhoan=<%# Eval("TenTaiKhoan") %>'>Cá nhân</a></li>
                            <li><a href='BillUser.aspx?mataikhoan=<%#Eval("MaTaiKhoan") %>'> Hóa đơn</a></li>
                            <li><a href="#">Page 3</a></li>
                            
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <h3 style="text-align:center">
                <div id="txtTenHienTai">Xin chào <?= $_GET["taikhoan"]?></div>
            </h3>
        </div>
        <div class="panel-body">

            <div class="thongtin">
                <!--Thông tin-->
                <div class="tenkhachhang form-group">
                    <label>Họ tên:</label>
                    <input name="txtHoten" type="text" value='<?= $hoten ?>' class="form-control" disabled="disabled" />
                </div>
                <div class="emailkhachang form-group">
                    <label>Email:</label>
                    <input name="txtEmail" type="email" value='<?= $email ?>' disabled="disabled" class="form-control" />
                </div>
                <div class="chucnangnguoidung">   
                    <a href="editprofile.php?taikhoan=<?= $_GET["taikhoan"]?>" class="btn btn-success" role="button">Sừa thông tin</a>
                    <a href="editpassword.php?taikhoan=<?= $_GET["taikhoan"]?>" class="btn btn-warning" role="button">Đổi mật khẩu</a>
                    <a href="../dangxuat.php" class="btn btn-danger" role="button">Đăng xuất</a>                   
                </div>
            </div>
        </div>
<?php include 'footer.php' ?>