<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta charset="utf-8" />
    <link href="cssAdmin.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap-3.1.1.min.js"></script>
</head>

<body>
   <!--<form id="form1" runat="server" method="post">-->
        <div class="container-fluid">
            <div class="adminmenu">
                <div class="row">
                    <!-- uncomment code for absolute positioning tweek see top comment in css -->
                    <!-- <div class="absolute-wrapper"> </div> -->
                    <!-- Menu -->
                    <div class="side-menu">

                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="brand-wrapper">
                                    <!-- Hamburger -->
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <!-- Brand -->
                                    <div class="brand-name-wrapper">
                                        <a class="navbar-brand" href="index.php">Admin</a>
                                    </div>
                                </div>

                            </div>

                            <!-- Main Menu -->
                            <div class="side-menu-container">
                                <ul class="nav navbar-nav">
                                    <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>

                                   <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl1taikhoan">
                                            <span class="glyphicon glyphicon-user"></span>Tài khoản<span class="caret"></span>
                                        </a>

                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1taikhoan" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">   
                                                    <li><a href="listaccount.php">Danh sách tài khoản</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Dropdown-->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl1sanpham">
                                            <span class="glyphicon glyphicon-shopping-cart  "></span>Sản phẩm<span class="caret"></span>
                                        </a>

                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1sanpham" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="listproduct.php">Danh sách sản phẩm</a></li>
                                                    <li><a href="listproduct.php">Danh sách loại</a></li>
                                                    <li><a href="addproduct.php">Thêm sản phẩm</a></li>
                                                    <li><a href="#">Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                     <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl1binhluan">
                                            <span class="glyphicon glyphicon-comment"></span>Bình luận<span class="caret"></span>
                                        </a>

                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1binhluan" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="#">Bình luận sản phẩm</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><span class="glyphicon glyphicon-camera"></span> SlideShow</a></li>
                                     <li>
                                        <center><a href="../index.php" class="btn btn-info" role="button">Đăng xuất</a></center>
                                     </li>
                                   
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- Main Content -->
                    <div class="container-fluid">
                        <div class="side-body">
                            <div class="container-fluid">