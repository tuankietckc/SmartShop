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
                <asp:Repeater ID="Repeater1" runat="server">
                    <ItemTemplate>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" ID="lbtnProduct" Style="text-decoration:none">Tên Sản phẩm</a>
                                </td>
                                <td>Số lượng</td>
                                <td>Đơn giá</td>
                                <td>Tên loại</td>
                                <td>
                                    <a href="#" ID="btnSuaSPLink" CssClass="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                </td>
                                <td>
                                    <a href="#" ID="btnXoaSPLink" runat="server" CssClass="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </ItemTemplate>
                </asp:Repeater>
            </table>
        </div>
<?php include'footer.php' ?>