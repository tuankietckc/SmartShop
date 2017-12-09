<?php include 'header.php' ?>
<div class="themsanpham">
        <!--Tên sản phẩm-->
        <div class="row">

            <div class="col-md-2">
                <p class="psanpham" for="tensp">Tên sản phẩm</p>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                  <input type="text" class="    form-control" name="txttensp">
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
                  <select class="form-control" id="sel1" style="width: 30%">
                    <option>Loại sp</option>
                  </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                  <a href="../index.php" class="btn btn-info" role="button">Thêm sản phẩm</a>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>