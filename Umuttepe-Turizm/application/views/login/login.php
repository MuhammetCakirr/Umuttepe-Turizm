<!doctype html>
<html lang="en">
<head>
	<title>Login 10</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="application/views/login/css/style.css">

</head>
<body>

<section class="ftco-section img js-fullheight" style="background-image: url(images/bg.jpg);">
	<div class="container">
		<div>
			<?php
			if (isset($data['error'])) {
				echo $data['error'];
			}
			?>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Giriş Yap</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
					<h3 class="mb-4 text-center">Hesabınız var mı?</h3>
					<form action="" class="signin-form" method="POST">
						<div class="form-group">
							<input id="email" name="email" type="text" class="form-control" placeholder="E-Posta Adresi"
								   required>
						</div>
						<div class="form-group">
							<input id="password" name="password" type="password" class="form-control"
								   placeholder="Şifre" required>
							<span toggle="password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3">Giriş Yap</button>
						</div>
						<div class="form-group d-md-flex">
							<!-- <div class="w-50">
								<label class="checkbox-wrap checkbox-primary">Kişisel verilerin işlenmesine ilişkin <b><u>Aydınlatma Metni</u></b>’ni okudum.
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div> -->
							<div class="mx-auto text-center">
								<a href="#" style="color: #fff">Şifremi Unuttum</a>
								<p>Henüz üye değil misiniz?</p>
								<a href='register' class="form-control btn btn-primary submit px-3">Üye Ol</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="application/views/login/js/jquery.min.js"></script>
<script src="application/views/login/js/popper.js"></script>
<script src="application/views/login/js/bootstrap.min.js"></script>
<script src="application/views/login/js/main.js"></script>

</body>
</html>

