
<!DOCTYPE html>
<html lang="en">
<?php include 'stylepage.php' ?>
<body>
	
	<?php 
	include 'config.php';
	//session_start();
	$giohang = array();
if(isset($_SESSION["giohang"]))
{
	$giohang = $_SESSION["giohang"];
}
if(isset($_GET["id"]) && isset($_GET["them"]))
{
	$id = $_GET["id"];
	for($j=0; $j < count($giohang); $j++)
	{
		if($giohang[$j]["masanpham"] == $id)
			$giohang[$j]["soluong"]++;
		break;
	}
	if($j == count($giohang))
	{
		$sql = "SELECT * FROM sanpham where masanpham = $id";
		$kq = $conn->query($sql);
		if($kq->num_rows > 0)
		{
			$sanpham = $kq->fetch_assoc();
			$sanpham["soluong"] = 1;
			$giohang = $sanpham;
		}
	}
	$_SESSION["giohang"] = $giohang;
}	
	 ?>
	 <?php 
		include 'navigation.php'; 
		var_dump($_SESSION["TaiKhoan"]);
	?>
	<div class="page-head">
		<div class="container">
			<h3>Check Out </h3>
		</div>
	</div>
	<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Xóa</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
					</tr>
				</thead>
					<tbody>
						<?php 
						foreach ($giohang as $sp) 
						{
						 ?>
						<tr class="rem1">
							<td class="invert-closeb">
								<div class="rem">
									<div class="close1"> </div>
								</div>
								
							</td>
							<td><img src="<?= $sp["hinhanh"] ?>"></td>
							<td class="invert">
									<span><?= $sp["soluong"] ?></div>
							</td>
							<td class="invert"><?= $sp["tensanpham"] ?></td>
							<td class="invert"><?= $sp["dongia"] ?></td>
						</tr>
					<?php 
					}
					 ?>
					
			</tbody></table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="mens.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Shopping basket</h4>
					<ul>
						<li>Hand Bag <i>-</i> <span>$45.99</span></li>
						<li>Watches <i>-</i> <span>$45.99</span></li>
						<li>Sandals <i>-</i> <span>$45.99</span></li>
						<li>Wedges <i>-</i> <span>$45.99</span></li>
						<li>Total <i>-</i> <span>$183.96</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>