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
            <form action="register" class="signin-form" method="POST">
				<div>
					<?php
					if (isset($data['error'])) {
						echo $data['error'];
					}
					?>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Üye Ol</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
                                <div class="form-group">
                                    <input type="text" name="fullName" class="form-control" placeholder="Ad ve Soyad" value="<?php echo isset($_POST['fullName']) ? $_POST['fullName'] : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="E-Posta Adresi" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="birthDate" class="form-control" value="<?php echo isset($_POST['birthDate']) ? $_POST['birthDate'] : ''; ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group form-check d-md-flex">
                                            <input type="radio" class="form-check-input" name="gender" id="gender1" value="0">
                                            <label for="gender1" class="form-check-label">Kadın</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group form-check d-md-flex">
                                            <input type="radio" class="form-check-input" name="gender" id="gender2" value="1" checked>
                                            <label for="gender2" class="form-check-label">Erkek</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
					</div>
                    <div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">                  
                                <div class="form-group">
                                    <input type="text" name="tcKimlikNo" class="form-control" placeholder="TC Kimlik No" value="<?php echo isset($_POST['tcKimlikNo']) ? $_POST['tcKimlikNo'] : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="tel" class="form-control" placeholder="Telefon No" value="<?php echo isset($_POST['tel']) ? $_POST['tel'] : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" name="password" type="password" class="form-control" placeholder="Şifre" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" name="passwordAgain" type="password" class="form-control" placeholder="Şifre Tekrar" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                        </div>
					</div>
				</div>
                <div class="row justify-content-center">
                    <div class="form-group">
						<input type="hidden" name="page" value="register">
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

