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
		<section class="img js-fullheight ftco-section" style="background-image: url(images/bg.jpg);">
			<div class="container">
            <form action="" class="signin-form" method="POST">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Üye Ol</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ad ve Soyad" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-Posta Adresi" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group form-check d-md-flex">
                                            <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label for="flexRadioDefault1" class="form-check-label">Kadın</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-check d-md-flex">
                                            <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label for="flexRadioDefault2" class="form-check-label">Erkek</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
					</div>
                    <div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">                  
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="TC Kimlik No" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefon No" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" placeholder="Şifre" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" placeholder="Şifre Tekrar" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                        </div>
					</div>
				</div>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Üye Ol</button>
                        <p style="color: #fff;">Bir Hesabın Var Mı?</p>
                        <a href='login' class="form-control btn btn-primary submit px-3">Giriş Yap</a>
                    </div>
                </div>
            </form>
			</div>
		</section>

		<script src="application/views/login/js/jquery.min.js"></script>
		<script src="application/views/login/js/popper.js"></script>
		<script src="application/views/login/js/bootstrap.min.js"></script>
		<script src="application/views/login/js/main.js"></script>

	</body>
</html>

