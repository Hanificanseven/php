<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Kategori</h2>
		<?php $cinsiyet = $db->prepare("SELECT * FROM gender");
		$cinsiyet->execute(); ?>
		<?php foreach ($cinsiyet as  $gender) {	?>
			<div class="panel-group category-products" id="accordian">
				<!--category-productsr-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian2" href="#<?php echo $gender['gender_name']; ?>">
								<span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php echo $gender['gender_name']; ?>
							</a>
						</h4>
					</div>
					<div id="<?php echo $gender['gender_name']; ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<?php $kategoriler = $db->prepare("SELECT * FROM category");
							$kategoriler->execute(); ?>
							<ul>
								<?php foreach ($kategoriler as  $value) {
								?>
									<li><a href="products.php?categoryid=<?php echo $value["id"] ?>&genderid=<?php echo $gender['id']; ?>"><?php echo $value["category_name"] ?> </a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<!--/category-productsr-->
	</div>
</div>