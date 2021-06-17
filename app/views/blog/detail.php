<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mt-5">
				<div class="card">
					<div class="card-body">
						<h1 class="h2">Active Wear</h1>
						<p class="h3 py-2">$25.00</p>
						
						<ul class="list-inline">
							<li class="list-inline-item">
								<h6>Brand:</h6>
							</li>
							<li class="list-inline-item">
								<p class="text-muted"><strong>Easy Wear</strong></p>
							</li>
						</ul>
						<h6 >Berita Lengkap:</h6>
						<?php 
						$_detail= new detail();
						$param = $_detail -> detail();
						 ?>

						<p action="<?= BASEURL; ?>/blog/detail" method="POST"><?= $_detail; ?></p>
						
						<form action="" method="GET">
							<input type="hidden" name="product-title" value="Activewear">
							
							<div class="row pb-3">
								<div class="col d-grid">
									<button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Sebelumnya</button>
								</div>
								<div class="col d-grid">
									<button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Lanjut</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	
</section>