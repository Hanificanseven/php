<?php
if (isset($_POST["yorumekle"])) {
	$yorum = $db->prepare("INSERT INTO comments (`product_id`, `name`, `email`, `comment`) VALUES ('{$_GET['productid']}', '{$_POST['name']}', '{$_POST['email']}', '{$_POST['comment']}')");
	$yorum->execute();
}
$id = $_GET['productid'];
$product = $db->prepare("SELECT * FROM products WHERE id = {$id}");
$product->execute();
$row = $product->fetch();
?>
<div class="col-sm-9 padding-right">

	<div class="product-details">
		<!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<?php $id = $_GET['productid'];
				$photo = $db->prepare("SELECT * FROM images WHERE product_id = {$id}");
				$photo->execute();
				$rowd = $photo->fetch(); ?>
				<img src="<?php echo $rowd['image_url']; ?>" alt="" />

			</div>
			<div id="similar-product" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<?php foreach ($photo as $k) {

						?>
							<a href=""><img src="<?php echo $k['image_url']; ?>" width="85" height="84" alt=""></a> <?php } ?>
					</div>
				</div>

				<!-- Controls -->
				<a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>

		</div>
		<div class="col-sm-7">
			<div class="product-information">
				<!--/product-information-->
				<img src="images/product-details/new.jpg" class="newarrival" alt="" />
				<h2><?php echo $row['product_name']; ?></h2>
				<p>ID: <?php echo $row['id']; ?></p>
				<span>
					<span>TL <?php echo $row['price']; ?></span>
					<label>Miktar:</label>
					<input type="text" value="3" />
					<button type="button" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Sepete Ekle
					</button>
				</span>
				<p><b>Stock Durumu:</b><?php echo $row['stock']; ?></p>

			</div>
			<!--/product-information-->
		</div>
	</div>
	<!--/product-details-->
	<div class="category-tab shop-details-tab">
		<!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li><a href="#details" data-toggle="tab">Ürün Hakkında</a></li>
				<li class="active"><a href="#reviews" data-toggle="tab">Yorumlar (5)</a></li>
			</ul>
		</div>
		<?php include("yorumlar.php"); ?>