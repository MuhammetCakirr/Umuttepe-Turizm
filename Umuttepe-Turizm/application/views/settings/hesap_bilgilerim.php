<style>
	.form-control {
		padding: 20px;
	}
</style>
<div>
	<?php
	if (isset($data['error'])) {
		echo $data['error'];
	}
	?>
</div>
<form method="post" action="hesap_bilgilerim" class="row" style="margin: 8px;">
	<div class="col-md-6">
		<div class="form-group">
			<label for="account-fn">Ad - Soyad</label>
			<input class="form-control" type="text" id="account-fn" name="fullName" value="<?php echo isset($data['hesapBilgilerim']['fullName']) ? $data['hesapBilgilerim']['fullName'] : ''; ?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="account-ln">Telefon Numarası</label>
			<input class="form-control" type="text" id="account-phone" name="tel" value="<?php echo isset($data['hesapBilgilerim']['tel']) ? $data['hesapBilgilerim']['tel'] : ''; ?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="account-email">E-Posta Adresi</label>
			<input class="form-control" type="email" id="account-email" name="email" value="<?php echo isset($data['hesapBilgilerim']['email']) ? $data['hesapBilgilerim']['email'] : ''; ?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="account-phone">TC Kimlik No</label>
			<input class="form-control" type="text" id="account-phone" name="tcKimlikNo" value="<?php echo isset($data['hesapBilgilerim']['tcKimlikNo']) ? $data['hesapBilgilerim']['tcKimlikNo'] : ''; ?>" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="dtarihi">Doğum Tarihi</label>
			<input class="form-control" type="date" id="dtarihi" name="birthDate"  value="<?php echo isset($data['hesapBilgilerim']['birthDate']) ? $data['hesapBilgilerim']['birthDate'] : ''; ?>" required>
		</div>
	</div>
	<div class="col-md-6 row">
		<div class="col-6">
			<div class="form-group form-check d-md-flex">
				<input type="radio" class="form-check-input" name="gender" id="gender1" value="0" <?php echo isset($data['hesapBilgilerim']['gender']) && $data['hesapBilgilerim']['gender'] == 0 ? 'checked' : ''; ?> required>
				<label for="gender1" class="form-check-label">Kadın</label>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group form-check d-md-flex">
				<input type="radio" class="form-check-input" name="gender" id="gender2" value="1" <?php echo isset($data['hesapBilgilerim']['gender']) && $data['hesapBilgilerim']['gender'] == 1 ? 'checked' : ''; ?> required>
				<label for="gender2" class="form-check-label">Erkek</label>
			</div>
		</div>
	</div>
	<!-- <div class="col-md-6">
						<div class="form-group">
							<label for="account-confirm-pass">Mevcut Şifre</label>
							<input class="form-control" type="password" id="account-confirm-pass">
						</div>
					</div> -->
	<div class="col-12">
		<hr class="mt-2 mb-3">
		<div class="d-flex flex-wrap justify-content-between align-items-center">
			<input type="hidden" name="page" value="hesapBilgilerim">
			<button class="btn btn-style-1 btn-primary" type="submit" data-toast data-toast-position="topRight"
					data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!"
					data-toast-message="Your profile updated successfuly.">Profili Güncelle</button>
		</div>
	</div>
</form>
