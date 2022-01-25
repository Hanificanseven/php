<div class="tab-content">
	<div class="tab-pane fade" id="details">
		<p><?php echo $row['description']; ?></p>
	</div>
	<div class="tab-pane fade active in" id="reviews">
		<div class="col-sm-12">
			<?php
			$pid = $_GET['productid'];
			$comment = $db->prepare("SELECT * FROM comments WHERE product_id = {$pid}");
			$comment->execute();
			foreach ($comment as $p) {
			?>
				<ul>
					<li><a href=""><i class="fa fa-user"></i><?php echo $p['name']; ?></a></li>
					<li><a href=""><i class="fa fa-clock-o"></i><?php echo $p['email']; ?></a></li>
				</ul>
				<p><?php echo $p['comment']; ?></p>
			<?php
			}
			?>
			<p><b>Write Your Review</b></p>

			<form action="product-details.php?productid=<?php echo $id; ?>" method="POST">
				<span>
					<input type="name" name="name" placeholder="Your Name" />
					<input type="email" name="email" placeholder="Email Address" />
				</span>
				<textarea name="comment"></textarea>
				<button type="submit" name="yorumekle" class="btn btn-default pull-right">
					Submit
				</button>
			</form>
		</div>
	</div>

</div>
</div>