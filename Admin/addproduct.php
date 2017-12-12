<?php include 'header.php' ?>
<form action="xuLy_upload.php" method="POST" enctype="multipart/form-data" role="form">
   <div class="themsanpham">
        <!--Tên sản phẩm-->
        <div class="row">

            <div class="col-md-2">
                <p class="psanpham" for="tensp">Tên sản phẩm</p>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="txttensp">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--Mô tả sản phẩm-->
        <div class="row">
            <div class="col-md-2">
                <p class="psanpham">Mô tả sản phẩm</p>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="txtmota">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--Hình đại diện-->
        <div class="row">
            <div class="col-md-2">
                <p class="psanpham">Hình đại diện</p>
            </div>
            <div class="col-md-8">
               <div class="form-group">
                  <input type="file" class="form-control" name="fileanhdaidien">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- Số lượng -->
        <div class="row">   
            <div class="col-md-2">
                <p class="psanpham">Số lượng</p>
            </div>
            <div class="col-md-8">
               <div class="form-group">
                  <input type="text" class="form-control" name="txtsoluong">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--Đơn giá-->
        <div class="row">

            <div class="col-md-2">
                <p class="psanpham">Đơn giá</p>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="txtdongia">
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--Loại sản phẩm-->
        <div class="row">
            <div class="col-md-2">
                <p class="psanpham">Loại sản phẩm</p>
            </div>

            <div class="col-md-8">
                  <select class="form-control" id="LoaiSP" name="LoaiSP" style="width: 30%">
 <?php
    include '../config.php';
    $sql_layLoaiSP = "Select * from LoaiSanPham";
    $LSP = $conn->query($sql_layLoaiSP);
    if($LSP->num_rows > 0)
    {
        while($BangLoaiSP = $LSP->fetch_assoc())
        {
    ?>
                    <option value="<?= $BangLoaiSP["MaLoaiSanPham"] ?>"><?= $BangLoaiSP["TenLoaisanpham"] ?></option>
<?php 
        }
    }
?>
                  </select>
                 
            </div>
        </div>
        <!--Nhà cung cấp-->
         <div class="row">
            <div class="col-md-2">
                <p class="psanpham">Nhà cung cấp</p>
            </div>

            <div class="col-md-8">
                  <select class="form-control" id="NhaCC" name="NhaCC" style="width: 30%">
 <?php
 include '../config.php';
    $sql_layNhaCC = "Select * from nhacungcap";
    $NCC = $conn->query($sql_layNhaCC);
    if($NCC->num_rows > 0)
    {
        while($BangNhaCC = $NCC->fetch_assoc())
        {
    ?>
                    <option value="<?= $BangNhaCC["mancc"] ?>"><?= $BangNhaCC["tenncc"] ?></option>
<?php 
        }
    }
?>
                  </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!--href="../index.php" về trang chủ-->
                 <!--<a href="xuLy-upload.php" class="btn btn-info" role="submit">Thêm sản phẩm</a>-->
                 <input type="submit" class="btn btn-info" value="Thêm sản phẩm">
            </div>
        </div>
    </div> 
</form>

<?php include 'footer.php' ?>