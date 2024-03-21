<style>
	.rotaduzenlebtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.rotaeklebtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.rotaolusturbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: steelblue;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}


	.rotaduzenleiptalbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: darkred;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}

	.rotaekleiptalbtn {
		width: 25%;
		border: 1px solid steelblue;
		border-radius: 10px;
		background-color: darkred;
		padding: 10px;
		margin-top: 10px;
		color: aliceblue;
	}


	#rotaeklediv {
		display: none;
		background-color: #ffffff;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
	}


	#rotaduzenlediv {
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

<script src="../assets/js/rotalar.js"></script>

<div class="container-xxl flex-grow-1 container-p-y">

	<div id="rotaduzenlediv">
		<div class="card mb-4">
			<h5 class="card-header">Rota Düzenle</h5>
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<label for="exampleFormControlSelect1" class="form-label">Kalkış Yeri</label>
							<select class="form-select" id="kalkisyeriduzenle" aria-label="Default select example">
								<?php
									foreach ($data['cities'] as $city){
										?>
										<option value="<?= $city['id']?>"><?= $city['name']?></option>
										<?php
									}
								?>
							</select>
						</div>
						<div class="col-lg-6 col-sm-12">
							<label for="exampleFormControlSelect1" class="form-label">Varış Yeri</label>
							<select class="form-select" id="varisyeriduzenle" aria-label="Default select example">
								<?php
								foreach ($data['cities'] as $city){
									?>
									<option value="<?= $city['id']?>"><?= $city['name']?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<label for="html5-time-input" class="col-form-label">Kalkış Saati</label>

							<input class="form-control" type="time" value="12:30:00" id="kalkissaatiduzenle"/>

						</div>

						<div class="col-lg-6 col-sm-12">
							<label for="html5-time-input" class="col-form-label">Varış Saati</label>

							<input class="form-control" type="time" value="12:30:00" id="varissaatiduzenle"/>

						</div>

					</div>

					<div class="row mt-1">
						<div class="col-lg-6 col-sm-12">
							<label for="defaultFormControlInput" class=" form-label">Bilet Ücreti</label>
							<input type="text" class="form-control" id="biletucretiduzenle" placeholder="765 TL"
								   aria-describedby="defaultFormControlHelp"/>

						</div>
						<div class="col-lg-6 col-sm-12">
							<label for="defaultFormControlInput" class=" form-label">Otobüs Plakası</label>
							<input type="text" class="form-control" id="otobusplakasiduzenle" placeholder="06NZR294"
								   aria-describedby="defaultFormControlHelp"/>
						</div>
					</div>

					<input type="hidden" value="" name="id" id="rotaduzenleid">
					<input type="button" value="Rotayı Güncelle" class="rotaduzenlebtn">
					<input type="button" value="İptal" class="rotaduzenleiptalbtn">
				</form>
			</div>
		</div>
	</div>

	<div id="rotaeklediv">
		<div class="card mb-4">
			<h5 class="card-header">Sefer Ekle</h5>
			<div class="card-body">

				<form>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<label for="exampleFormControlSelect1" class="form-label">Kalkış Yeri</label>
							<select class="form-select" id="kalkisyeriekle" aria-label="Default select example">
								<?php
								foreach ($data['cities'] as $city){
									?>
									<option value="<?= $city['id']?>"><?= $city['name']?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="col-lg-6 col-sm-12">
							<label for="exampleFormControlSelect1" class="form-label">Varış Yeri</label>
							<select class="form-select" id="varisyeriekle" aria-label="Default select example">
								<?php
								foreach ($data['cities'] as $city){
									?>
									<option value="<?= $city['id']?>"><?= $city['name']?></option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<label for="html5-time-input" class="col-form-label">Kalkış Saati</label>

							<input class="form-control" type="time" value="00:00:00" id="kalkissaatiekle"/>

						</div>

						<div class="col-lg-6 col-sm-12">
							<label for="html5-time-input" class="col-form-label">Varış Saati</label>

							<input class="form-control" type="time" value="00:00:00" id="varissaatiekle"/>

						</div>

					</div>

					<div class="row mt-1">
						<div class="col-lg-6 col-sm-12">
							<label for="defaultFormControlInput" class=" form-label">Bilet Ücreti</label>
							<input type="text" class="form-control" id="biletucretiekle" placeholder="765 TL"
								   aria-describedby="defaultFormControlHelp"/>

						</div>
						<div class="col-lg-6 col-sm-12">
							<label for="defaultFormControlInput" class=" form-label">Otobüs Plakası</label>
							<input type="text" class="form-control" id="otobusplakasiekle" placeholder="06NZR294"
								   aria-describedby="defaultFormControlHelp"/>
						</div>
					</div>
					<input type="button" value="Seferi Oluştur" class="rotaolusturbtn">
					<input type="button" value="İptal" class="rotaekleiptalbtn">
				</form>

			</div>
		</div>
	</div>

	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Rotalar</h4>
	<div class="card">
		<h5 class="card-header">Rota Tablosu</h5>
		<div class="table-responsive text-nowrap">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Kalkış Yeri</th>
					<th>Varış Yeri</th>
					<th>Kalkış Saati</th>
					<th>Varış Saati</th>
					<th>Bilet Ücreti</th>
					<th>Otobüs Plakası</th>
				</tr>
				</thead>
				<tbody class="table-border-bottom-0">

				<?php
				foreach ($data['routes'] as $route) {
					?>
					<tr>
						<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong
								id="kalkisyeritablo"><?= $route['from_city_name'] ?></strong></td>
						<td id="varisyeritablo"><?= $route['to_city_name'] ?></td>
						<td id="kalkissaatitablo"><?= $route['departure_time'] ?></td>
						<td id="varisaatitablo"><?= $route['arrival_time'] ?></td>
						<td id="biletucretitablo"><?= $route['price'] ?> TL</td>
						<td id="plakatablo"><?= $route['bus_plate_code'] ?></td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<input type="hidden" name="rota" id="<?= $route['id'] ?>" value="<?= htmlspecialchars(json_encode($route)) ?>">
								<div class="dropdown-menu">
									<a id="duzenlebtn" data-route-id ="<?= $route['id']?>"  class="dropdown-item" href="javascript:void(0);"><i
											class="bx bx-edit-alt me-1"></i> Düzenle</a>
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Sil</a>
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
	<input type="button" value="Sefer Ekle" class="rotaeklebtn">
</div>


