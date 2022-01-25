<?php
$sqlString = "SELECT * FROM products";
if (isset($_GET["categoryid"]) && isset($_GET["genderid"])) {
	$sqlString = "SELECT * FROM products WHERE category_id ={$_GET['categoryid']} AND gender_id ={$_GET['genderid']} ";
} else if (isset($_GET["categoryid"])) {
	$sqlString = "SELECT * FROM products WHERE category_id ={$_GET['categoryid']}";
} else if (isset($_GET["genderid"])) {
	$sqlString = "SELECT * FROM products WHERE gender_id ={$_GET['genderid']} ";
}
$urunler = $db->prepare($sqlString);
$urunler->execute();
foreach ($urunler as  $urun) {
	$foto = $db->prepare("SELECT * FROM images WHERE product_id = {$urun['id']}");
	$foto->execute();
	$row = $foto->fetch();
?><a href="product-details.php?productid=<?php echo $urun['id']; ?>">
		<div class="col-sm-4">

			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo $row['image_url']; ?>" alt="" style="width:100%;" />
						<h2><?php echo $urun['price'] . "TL"; ?></h2>
						<p><?php echo $urun['product_name']; ?></p>
						<a href="sepetekle.php?id=<?php echo $urun['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
					</div>
					<a href="product-details.php?productid=<?php echo $urun['id']; ?>">
						<div class="product-overlay">
							<div class="overlay-content">
								<h2><?php echo $urun['price'] . "TL"; ?></h2>
								<p><?php echo $urun['product_name']; ?></p>
								<a href="sepetekle.php?id=<?php echo $urun['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>
	</a>
<?php } ?>