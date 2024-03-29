<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Bildirimler</h4>
	<div class="card">
		<h5 class="card-header">Kullanıcılardan Gelen Bildirimler</h5>
		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
				<tr>
					<th>Adı</th>
					<th>E-Posta</th>
					<th>Telefon Numarası</th>
					<th>Konu</th>
					<th>Mesaj</th>
				</tr>
				</thead>
				<tbody class="table-border-bottom-0">
                    <?php
					foreach ($data['bildirimler'] as $bildirim){

						?>

						<tr>
							<td><?= $bildirim['name']?></td>
							<td><?= $bildirim['email']?></td>
							<td><?= $bildirim['tel']?></td>
							<td><?= $bildirim['subject']?></td>
							<td><?= $bildirim['content']?></td>
						</tr>

						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
