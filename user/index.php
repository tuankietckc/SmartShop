 <?php include 'header.php' ?>
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
                                
                                <li><a href='../Index.aspx'>Trang chủ</a></li>
                                <li><a href='Profile.aspx?tentaikhoan=<%# Eval("TenTaiKhoan") %>'>Cá nhân</a></li>
                                <li><a href='BillUser.aspx?mataikhoan=<%#Eval("MaTaiKhoan") %>'> Hóa đơn</a></li>
                                <li><a href="#">Page 3</a></li>
                                
                            </ul>
                           
                        </div>
                    </div>
                </nav>
                <h3 style="text-align:center">
                    <asp:Label ID="lblTitle" Text="Xin chào" runat="server"></asp:Label>
                    <div id="txtTenHienTai">Xin chào tên tài khoản</div>
                </h3>
            </div>
            <div class="panel-body">

                <div class="thongtin">
                    <!--Thông tin-->
                    <div class="tenkhachhang form-group">
                        <asp:Label runat="server">Họ tên:</asp:Label>
                       
                        <input name="txtHoten" type="text" value='Họ tên' class="form-control" disabled="disabled" />
                    </div>
                    <div class="emailkhachang form-group">
                        <asp:Label runat="server">Email:</asp:Label>
                        <input name="txtEmail" type="text" value='Email' disabled="disabled" class="form-control" />
                    </div>
                    <div class="sdtHienTai form-group">
                        <asp:Label runat="server">Số điện thoại:</asp:Label>
                        <input name="txtSoDienThoai" type="text" value='SDT' disabled="disabled" class="form-control" />
                    </div>
                    <div class="chucnangnguoidung">   
                        <a href="index.php" class="btn btn-success" role="button">Sừa thông tin</a>
                        <a href="index.php" class="btn btn-warning" role="button">Đổi mật khẩu</a>
                        <a href="index.php" class="btn btn-danger" role="button">Đăng xuất</a>                   
                    </div>
                </div>
            </div>
 <?php include 'footer.php' ?>