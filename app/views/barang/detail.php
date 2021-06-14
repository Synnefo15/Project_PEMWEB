<div class="container mt-5 p-5">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['pangan']['komoditas']; ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['pangan']['harga']; ?></h6>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['pangan']['kategori']; ?></h6>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['pangan']['kota']; ?></h6>
			<a href="<?= BASEURL; ?>/barang" class="card-link">Kembali</a>
		</div>
	</div>
</div>