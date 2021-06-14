<!-- <div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Selamat Datang di Website saya</h1>
        <p class="lead">halo nama saya <?= $data['nama']; ?> </p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

</div> -->

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="w-100 pt-1 mb-5 text-right">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form action="" method="get" class="modal-content modal-body border-0 p-0">
			<div class="input-group mb-2">
				<input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
				<button type="submit" class="input-group-text bg-success text-light">
				<i class="fa fa-fw fa-search text-white"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
	<ol class="carousel-indicators">
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="./img/banner_rice.jpg" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left align-self-center">
							<h1 class="h1 text-success"><b>Panganku</b> </h1>
							<h3 class="h2">Liat harga bahan pangan yang anda ingin tau</h3>
							<p>
								"Panganku" adalah website yang dapat anda gunakan untuk melihat harga bahan pangan kebutuhan pokok. Dengan "Panganku" anda dapat dengan mudah mengetahui harga pasar bahan pangan yang dijual. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="./img/banner_egg.jpg" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left">
							<h1 class="h1 text-success"><b>Panganku<b/b> </h1>
							<h3 class="h2">Lihat berita terkini seputar harga bahan pangan</h3>
							<p>
								Dengan "Panganku" anda akan mendapatkan informasi yang up to date mengenai kebutuhan pokok sehari-hari.
								Mulai dari berita maupun artikel yang akan membahas mengenai bahan pokok sehari-hari.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="./img/banner_meat.jpg" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left">
							<h1 class="h1">Repr in voluptate</h1>
							<h3 class="h2">Ullamco laboris nisi ut </h3>
							<p>
								We bring you 100% free CSS templates for your websites.
								If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
		<i class="fas fa-chevron-left"></i>
	</a>
	<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
		<i class="fas fa-chevron-right"></i>
	</a>
</div>
<!-- End Banner Hero -->

<!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Kategori Pangan</h1>
                <p>
                   Kami menyediakan 3 kategori yaitu beras, telur, dan daging. Pada tiap kategori terdapat harga beserta daerahnya masing-masing
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./img/kategori_beras.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Beras</h5>
                <p class="text-center"><a class="btn btn-success">Lihat</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./img/kategori_daging.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Daging</h2>
                <p class="text-center"><a class="btn btn-success">Lihat</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./img/kategori_telur.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Telur</h2>
                <p class="text-center"><a class="btn btn-success">Lihat</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->
