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
                        <th style="text-align: center;">Trạng thái</th>
                        <th style="text-align: center;">Xóa</th>
                    </tr>
                </thead>
                <asp:Repeater ID="Repeater1" runat="server">
                    <ItemTemplate>
                        <tbody>
                            <?php
                            include '../config.php';
                            $sql_layLoaiSP = "Select * from SanPham, LoaiSanPham Where LoaiSanPham = MaLoaiSanPham";
                            $LSP = $conn->query($sql_layLoaiSP);
                            if($LSP->num_rows > 0)
                            {
                                while($row = $LSP->fetch_assoc())
                                {

                                ?>
                            <tr>
                                <td>
                                    <a href="#" ID="lbtnProduct" Style="text-decoration:none"><?= $row["tensanpham"] ?></a>
                                </td>
                                <td><?= $row["soluong"] ?></td>
                                <td><?= $row["dongia"] ?></td>
                                <td><?= $row["TenLoaisanpham"] ?></td>
                                <?php 
                                $trangthai = "";
                                if($row["trangthaisanpham"] == 1)
                                    $trangthai = "";
                                else
                                    $trangthai = "Bị cấm";
                            ?>    
                                <td><?= $trangthai ?></td>
                                <td>
                                    <?php 
                    $url = "xuly_xoa.php?masanpham=" .$row["masanpham"]."&trangthai=".$row["trangthaisanpham"];
                                     ?>
                                    <a href="<?= $url ?>" ID="btnXoaSPLink" runat="server" CssClass="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                            <?php 

                                }
                            }
                             ?>
                        </tbody>
                    </ItemTemplate>
                </asp:Repeater>
            </table>
        </div>
<?php include'footer.php' ?>