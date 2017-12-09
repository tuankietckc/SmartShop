<?php include'header.php' ?>
<div class="container-fluid">

            <h2>Danh sách sản phẩm</h2>

            <table class="table table-bordered table-hover danhsachsanpham" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="text-align: center;">Tên sản phẩm</th>
                        <th style="text-align: center;">Số lượng</th>
                        <th style="text-align: center;">Đơn giá</th>
                        <th style="text-align: center;">Loại sản phẩm</th>
                        <th style="text-align: center;">Sửa</th>
                        <th style="text-align: center;">Xóa</th>
                    </tr>
                </thead>
                        <tbody>
                            <tr>
                                <td>
                                      <a href="index.php">Tên sản phẩm (Đường link bài viết sản phẩm)</a>
                                </td>
                                <td>Số Lượng</td>
                                <td>Dơn giá</td>
                                <td>Tên loại</td>
                                <td>
                                   
                                    <a href="index.php" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-edit"></a>
                                </td>
                                <td>
                                     <a href="index.php" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-remove"></a>
                                </td>
                            </tr>
                        </tbody>
            </table>
        </div>
<?php include'footer.php' ?>