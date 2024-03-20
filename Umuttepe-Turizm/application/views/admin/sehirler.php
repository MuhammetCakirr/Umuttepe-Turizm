<style>
	.sehirekleolusturbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.sehirekleiptalbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: darkred;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.sehireklebtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	#sehireklediv {
		display: none;
		background-color: #ffffff;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

	}

	.show-animation {

		animation: fadeInDown 0.5s ease;
	}

	@keyframes fadeInDown {
		0% {
			opacity: 0;
			transform: translateY(-20px);
		}

		100% {
			opacity: 1;
			transform: translateY(0);
		}
	}
</style>

<script src="../assets/js/sehirler.js"></script>

<div class="container-xxl flex-grow-1 container-p-y">
	<div id="sehireklediv">
		<div class="card mb-4">
			<h5 class="card-header">Şehir Ekle</h5>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">Şehir Adı</label>
						<input type="text" class="form-control" id="sehiradi"
							   placeholder="Bayburt" aria-describedby="defaultFormControlHelp"/>

					</div>
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">Şehir Plakası</label>
						<input type="text" class="form-control" id="sehirplaka"
							   placeholder="69" aria-describedby="defaultFormControlHelp"/>

					</div>
				</div>
				<input type="button" value="Şehir Ekle" class="sehirekleolusturbtn">
				<input type="button" value="İptal" class="sehirekleiptalbtn">
			</div>
		</div>
	</div>

	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Şehirler</h4>
	<div class="card">
		<div style="display: flex; flex-direction: row;">
			<h5 class="card-header">Şehirler Tablosu</h5>
		</div>


		<div class="table-responsive text-nowrap">
			<table class="table table-borderless">
				<thead>
				<tr>
					<th>Şehir Adı</th>
					<th>Plakası</th>
					<th>Durumu</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach ($data['cities'] as $city) {
				?>

				<tr>
					<td><i class="fab fa-angular fa-lg text-danger me-3"></i>
						<strong><?= $city['name'] ?></strong>
					</td>
					<td><?= $city['plate_code'] ?></td>

					<td><span class="badge bg-label-primary me-1">Aktif</span></td>
					<td>
						<div class="dropdown">
							<button type="button" class="btn p-0 dropdown-toggle hide-arrow"
									data-bs-toggle="dropdown">
								<i class="bx bx-dots-vertical-rounded"></i>
							</button>
							<div class="dropdown-menu">
								<!-- <a class="dropdown-item" href="javascript:void(0);">
									<i class="bx bx-edit-alt me-1"></i> Düzenle</a> -->
								<a id="silbtn" data-tarife-id="<?= $city['id'] ?>" class="dropdown-item" href="javascript:void(0);">
									<i class="bx bx-trash me-1"></i> Sil</a>

							</div>
						</div>
					</td>
				</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<input type="button" value="Şehir Ekle" class="sehireklebtn">
</div>





