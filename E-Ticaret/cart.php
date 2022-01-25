<?php include('header.php') ?>

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Sepet</a></li>
				<li class="active">Sepet Detay</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Ürün</td>
						<td class="image">Ürün İsmi</td>
						<td class="total">Toplam</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
					$toplam = 0;
					$cokkies = $_COOKIE;
					foreach ($cokkies as $key => $value) {
						$product = $db->prepare("SELECT * FROM products WHERE id = {$value}");
						$product->execute();
						$row = $product->fetch();
						$photo = $db->prepare("SELECT * FROM images WHERE product_id = {$value}");
						$photo->execute();
						$row2 = $photo->fetch();
						$toplam += (int)$row['price'];
					?>
						<tr>
							<td class="cart_product">
								<a href="product-details.php?productid=<?php echo $row['id']; ?>"><img src="<?php echo $row2['image_url']; ?>" width=100px height=100px alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="product-details.php?productid=<?php echo $row['id']; ?>"><?php echo $row['product_name']; ?></a></h4>
								<p>ID: <?php echo $row['id']; ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $row['price']; ?> TL</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="sepettenkaldir.php?id=<?php echo $key ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr><?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</section>
<!--/#cart_items-->
<br>
<br>
<br>
<br>
<?php include('footer.php') ?>