<?php include('header.php') ?>

<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<!--login form-->
					<h2>Giriş Yap</h2>
					<form action="#">
						<input type="text" placeholder="Email" />
						<input type="email" placeholder="Şifre" />
						<button type="submit" class="btn btn-default">Giriş Yap</button>
					</form>
				</div>
				<!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">Yada</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
					<!--sign up form-->
					<h2>Kayıt Ol</h2>
					<form action="#">
						<input type="text" placeholder="Kullanıcı Adı" />
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Şifre" />
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>
<!--/form-->
<br>
<br>
<br>


<?php include('footer.php') ?>