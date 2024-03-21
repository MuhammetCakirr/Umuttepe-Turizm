<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Profil</h4>

	<div class="row">
		<div class="col-md-12">
			<div class="card mb-4">
				<h5 class="card-header">Hesap Bilgileri</h5>

				<hr class="my-0" />
				<div class="card-body">
					<form id="formAccountSettings" method="POST" action="adminLogin">
						<div class="row">
							<div class="mb-3 col-md-6">
								<label for="firstName" class="form-label">Ad</label>
								<input class="form-control" type="text" id="firstName" name="firstName" value="<?= $data['profil']['name']?>"
									   autofocus />
							</div>
							<div class="mb-3 col-md-6">
								<label for="lastName" class="form-label">Soyad</label>
								<input class="form-control" type="text" name="lastName" id="lastName" value="<?= $data['profil']['surname']?>" />
							</div>
							<div class="mb-3 col-md-6">
								<label for="email" class="form-label">E-Posta</label>
								<input class="form-control" type="text" id="email" name="email" value="<?= $data['profil']['email']?>"
									   placeholder="john.doe@example.com" />
							</div>

							<div class="mb-3 col-md-6">
								<label class="form-label" for="phoneNumber">Telefon Numarası</label>
								<div class="input-group input-group-merge">
									<span class="input-group-text">TR (+90)</span>
									<input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
										   placeholder="5331327841" value="<?= $data['profil']['tel']?>"/>
								</div>
							</div>

						</div>
						<div class="mt-2">
							<input type="hidden" name="operation" value="hesapBilgileriGuncelle">
							<button type="submit" class="btn btn-primary me-2">Kaydet</button>
						</div>
					</form>
				</div>
				<!-- /Account -->
			</div>
			<!-- <div class="card">
				<h5 class="card-header">Delete Account</h5>
				<div class="card-body">
				  <div class="mb-3 col-12 mb-0">
					<div class="alert alert-warning">
					  <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
					  <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
					</div>
				  </div>
				  <form id="formAccountDeactivation" onsubmit="return false">
					<div class="form-check mb-3">
					  <input
						class="form-check-input"
						type="checkbox"
						name="accountActivation"
						id="accountActivation"
					  />
					  <label class="form-check-label" for="accountActivation"
						>I confirm my account deactivation</label
					  >
					</div>
					<button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
				  </form>
				</div>
			  </div> -->
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="card mb-4">
				<h5 class="card-header">Şifre Güncelle</h5>

				<hr class="my-0" />
				<div class="card-body">
					<form id="formAccountSettings" method="POST" action="adminLogin">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="form-password-toggle">
									<label class="form-label" for="basic-default-password12"> Mevcut Şifre</label>
									<div class="input-group">
										<input type="password" class="form-control" id="basic-default-password12" name="oldPass"
											   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
											   aria-describedby="basic-default-password2" />
										<span id="basic-default-password2" class="input-group-text cursor-pointer"><i
												class="bx bx-hide"></i></span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="form-password-toggle">
									<label class="form-label" for="basic-default-password12"> Yeni Şifre</label>
									<div class="input-group">
										<input type="password" class="form-control" id="basic-default-password12" name="newPass"
											   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
											   aria-describedby="basic-default-password2" />
										<span id="basic-default-password2" class="input-group-text cursor-pointer"><i
												class="bx bx-hide"></i></span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 mt-1">
								<div class="form-password-toggle">
									<label class="form-label" for="basic-default-password12"> Yeni Şifre Tekrar</label>
									<div class="input-group">
										<input type="password" class="form-control" id="basic-default-password12" name="newAgainPass"
											   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
											   aria-describedby="basic-default-password2" />
										<span id="basic-default-password2" class="input-group-text cursor-pointer"><i
												class="bx bx-hide"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-2">
							<input type="hidden" name="operation" value="sifreGuncelle">
							<button type="submit" class="btn btn-primary me-2">Güncelle</button>
						</div>
					</form>
				</div>
				<!-- /Account -->
			</div>

		</div>
	</div>
</div>
