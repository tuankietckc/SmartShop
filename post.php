<!DOCTYPE html>
<html lang="en">
<?php include 'stylepost.php' ?>
<?php session_start(); ?>
<body>
	<?php include 'navigation.php' ?>
	<?php include 'config.php' ?>
	<?php 
		$sqlthongtinsanpham = "SELECT * FROM sanpham WHERE masanpham=".$_GET["id"];
		$ketquathongtinsanpham = $conn->query($sqlthongtinsanpham);
		if($ketquathongtinsanpham->num_rows > 0){
			while($row = $ketquathongtinsanpham->fetch_assoc()){
	?>
	<div class="single">
	<div class="container">
		<div class="col-md-6">
			<img src="<?= substr($row["hinhanh"],1) ?>" width="100%">
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3><?= $row["tensanpham"] ?></h3>
					<p><span class="item_price"><?= number_format($row["dongia"]) ?> VNĐ</span></p>
					
					<div class="description">
						<h5><?= $row["mota"] ?></h5>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Nhập số lượng mua ở đây</h5>
							<input type="number" name="numsoluong" class="form-control" style="width: 30%">
						</div>
					</div>
					
					<div class="clearfix"> </div>
					<div class="occasion-cart">
						<a href="#" class="item_add hvr-outline-out button2">Add to cart</a>
					</div>
	<?php 
			}
		}
		$conn->close();
	?>				
		</div>
		<div class="clearfix"></div>
</div>
</div>
</body>
</html>
<?php include 'footer.php' ?>
