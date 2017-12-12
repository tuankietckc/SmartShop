<!DOCTYPE html>
<html lang="en">
	<?php include 'stylepage.php' ?>
	<?php include 'config.php' ?>
	<?php 
		$sqldanhsachsp = "SELECT * FROM sanpham WHERE trangthaisanpham = 1";
		$ketquadanhsachsp = $conn->query($sqldanhsachsp);
		if($ketquadanhsachsp->num_rows > 0){
			while($row = $ketquadanhsachsp->fetch_assoc()){	
	?>
			
<body>
	<?php include 'navigation.php' ?>

	<div class="banner-grid">
		<div id="visual" class="pignose-layerslider">
				<div class="slide-visual">
					<!-- Slide Image Area (1000 x 424) -->
					<ul class="slide-group" style="display: block; width: 9000px; margin-left: -4000px; overflow: hidden;">
					    <li style="display: block; float: left;"><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image"></li>
					    <li class="slide-dummy" style="display: block; float: left;"><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image"></li>
					    <li style="display: block; float: left;"><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image"></li>
					    <li style="display: block; float: left;"><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image"></li>
					</ul>

					<!-- Slide Description Image Area (316 x 328) -->
					<div class="script-wrap">
						<div class="script-inner"><ul class="script-group" style="display: block; width: 2484px; margin-left: -1376.88px; overflow: hidden;">		
						<li style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image"></div></li><li style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image"></div></li><li class="slide-dummy" style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image"></div></li><li style="display: block; float: left;"><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image"></div></li></ul><div class="slide-pagination completedPagination"><a href="#" class="btn-page">1번째 슬라이드 보기</a><a href="#" class="btn-page">2번째 슬라이드 보기</a><a href="#" class="btn-page on">3번째 슬라이드 보기</a></div></div><div class="script-tint"></div>
						<div class="slide-controller">
							<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide"></a>
							<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide"></a>
							<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide"></a>
							<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide"></a>
						</div>
					</div>
					<div class="clearfix"></div>
				<div class="slide_tint left">&nbsp;</div><div class="slide_tint right">&nbsp;</div></div>
				<div class="clearfix"></div>
			</div>
		<script type="text/javascript" src="js/pignose.layerslider.js"></script>
		<script type="text/javascript">
		//<![CDATA[
			$(window).load(function() {
				$('#visual').pignoseLayerSlider({
					play    : '.btn-play',
					pause   : '.btn-pause',
					next    : '.btn-next',
					prev    : '.btn-prev'
				});
			});
		//]]>
		</script>
	</div>
	<div class="product-easy">
	<div class="container">
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">		  	 
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Latest Designs</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?= $row["hinhanh"] ?>" alt="" class="pro-image-front">
									<img src="<?= $row["hinhanh"] ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="post.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="post.php"><?= $row["tensanpham"] ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $row["dongia"] ?> VNĐ</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>	
					</div>	
				</div>	
			</div>
		</div>
	</div>
	</div>
	</div>
</div>
	<?php
		}
			}
	?>
<?php include 'footer.php' ?>
</body>
</html>