<style>
	.tarifeduzenlebtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.tarifeekleolusturbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.tarifeekleiptalbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: darkred;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.tarifeduzenleiptalbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: darkred;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.tarifeeklebtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	#tarifeeklediv {
		display: none;
		background-color: #ffffff;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

	}

	#tarifeduzenlediv {
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
<script src="../assets/js/tarifeler.js"></script>
<div class="container-xxl flex-grow-1 container-p-y">
	<div id="tarifeeklediv">
		<div class="card mb-4">
			<h5 class="card-header">Tarife Ekle</h5>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">Tarife Adı</label>
						<input type="text" class="form-control" id="tarifeadiekle"
							   placeholder="Yaşlı" aria-describedby="defaultFormControlHelp"/>

					</div>
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">İndirim Yüzdesi</label>
						<input type="text" class="form-control" id="tarifeyuzdesiekle"
							   placeholder="25" aria-describedby="defaultFormControlHelp"/>

					</div>
				</div>
				<input type="button" value="Tarife Ekle" class="tarifeekleolusturbtn">
				<input type="button" value="İptal" class="tarifeekleiptalbtn">
			</div>
		</div>
	</div>
	<div id="tarifeduzenlediv">
		<div class="card mb-4">
			<h5 class="card-header">Tarife Düzenle</h5>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">Tarife Adı</label>
						<input type="text" class="form-control" id="tarifeadiduzenle"
							   placeholder="Yaşlı" aria-describedby="defaultFormControlHelp"/>

					</div>
					<div class="col-lg-6 col-sm-12">
						<label for="defaultFormControlInput" class="form-label">İndirim Yüzdesi</label>
						<input type="text" class="form-control" id="tarifeyuzdesiduzenle"
							   placeholder="25" aria-describedby="defaultFormControlHelp"/>

					</div>
				</div>
				<input type="hidden" value="" id="tarifeduzenleid">
				<input type="button" value="Tarifeyi Güncelle" class="tarifeduzenlebtn">
				<input type="button" value="İptal" class="tarifeduzenleiptalbtn">
			</div>
		</div>
	</div>

	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Yolcu Tarifeleri</h4>
	<div class="card">
		<h5 class="card-header">Yolcu Tarifeleri Tablosu</h5>
		<div class="table-responsive text-nowrap">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Tarife Adı</th>
					<th>İndirim Oranı</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody class="table-border-bottom-0">
				<?php
				foreach ($data['tarifeler'] as $tarife) {
					?>
					<tr>
						<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong id="indirimadi"><?= $tarife['name']?></strong></td>
						<td id="indirimyuzdesi">%<?= $tarife['sale']?></td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn p-0 dropdown-toggle hide-arrow"
										data-bs-toggle="dropdown">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu">
									<a id="duzenlebtn" data-tarife-id="<?= $tarife['id'] ?>" data-tarife-adi="<?= $tarife['name'] ?>"
									   data-tarife-yuzdesi="<?= $tarife['sale'] ?>" class="dropdown-item" href="javascript:void(0);">
										<i class="bx bx-edit-alt me-1"></i> Düzenle</a>

									<a id="silbtn" data-tarife-id="<?= $tarife['id'] ?>" class="dropdown-item" href="javascript:void(0);">
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
	<input type="button" value="Tarife Ekle" class="tarifeeklebtn">
</div


