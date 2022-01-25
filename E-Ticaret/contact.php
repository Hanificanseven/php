<?php include('header.php');
if (isset($_POST['submit'])) {
	$message = $db->prepare("INSERT INTO message(names, email, subjects, messages) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['subject']}','{$_POST['message']}')");
	$message->execute();
}
?>

<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center">İletişim</h2>
				<div id="gmap" class="contact-map">
					<iframe src="<?php echo $ayarRow['harita']; ?>" width="100%" height="480"></iframe>
				</div>
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="contact-form">
					<h2 class="title text-center">Bize Ulaşın</h2>
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						<div class="form-group col-md-6">
							<input type="text" name="name" class="form-control" required="required" placeholder="Ad">
						</div>
						<div class="form-group col-md-6">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email">
						</div>
						<div class="form-group col-md-12">
							<input type="text" name="subject" class="form-control" required="required" placeholder="Konu">
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mesaj"></textarea>
						</div>
						<div class="form-group col-md-12">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit" style="width:100%;">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/#contact-page-->
<?php include('footer.php') ?>