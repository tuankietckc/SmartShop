<?php include 'header.php' ?>
<?php include '../config.php'; ?>
<?php 
    $sqldanhsachtaikhoan = "SELECT * FROM nguoidung";
    $ketquadanhsachtaikhoan = $conn->query($sqldanhsachtaikhoan);
?>
        <h2>Danh sách tài khoản</h2>
       
        <table class="table table-bordered table-hover danhsachsanpham" style="text-align: center;">
            <thead>
                <tr>
                    <th style="text-align: center;">Loại tài khoản</th>
                    <th style="text-align: center;">Tên tài khoản</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Trạng Thái</th>
                    <th style="text-align: center;">Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($ketquadanhsachtaikhoan->num_rows > 0){
                        while($row = $ketquadanhsachtaikhoan->fetch_assoc()){
                ?>
                    <tr>
                    <?php 
                        $loaitk = "";
                        if($row["LoaiTaiKhoan"] == 0)
                            $loaitk = "Khách hàng";
                        else 
                             $loaitk = "Admin";
                    ?>
                        <td><?= $loaitk ?></td>
                        <td><?= $row["TenTaiKhoan"] ?></td>
                        <td><?= $row["Emai"] ?></td>
                    <?php 
                        $trangthai = "";
                        if($row["TrangThai"] == 1)
                            $trangthai = "";
                        else
                            $trangthai = "Bị cấm";
                    ?>    
                        <td><?= $trangthai ?></td>
                    <?php 
                        $url = "xuly_trangthaitaikhoan.php?tentaikhoan=" .$row["TenTaiKhoan"]."&trangthai=".$row["TrangThai"];
                        
                    ?> 
                        <td><a href="<?= $url ?>" ID="btnSuaSPLink" CssClass="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a></td>
                    </tr>
                <?php
                        }
                    }
                ?>        
            </tbody>
        </table>
<?php include 'footer.php' ?>