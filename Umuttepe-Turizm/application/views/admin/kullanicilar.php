<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Kullanıcılar</h4>
	<div class="card">
		<h5 class="card-header">Kullanıcılar Tablosu</h5>
		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
				<tr>
					<th>Adı - Soyadı</th>
					<th>Cinsiyet</th>
					<th>Doğum Tarihi</th>
					<th>Telefon No</th>
					<th>E-Posta</th>
					<th>TC Kimlik No</th>
					<th>Bakiye</th>
				</tr>
				</thead>
				<tbody class="table-border-bottom-0">
				<?php
				foreach ($data['accounts'] as $account){
					?>
					<tr>
						<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $account['fullName']?></strong></td>
						<td><?= $account['gender'] == 1 ? "Erkek" : "Kadın"?></td>
						<td>
							<?= $account['birthDate']?>
						</td>
						<td><span class="badge bg-label-primary me-1"><?= $account['tel']?></span></td>
						<td>
							<?= $account['email']?>
						</td>
						<td>
							<?= $account['tcKimlikNo']?>
						</td>
						<td>
							<span class="badge bg-label-success me-1"><?= $account['bakiye']?> TL</span>
						</td>
					</tr>

					<?php
				}
				?>


				</tbody>
			</table>
		</div>
	</div>
</div>
