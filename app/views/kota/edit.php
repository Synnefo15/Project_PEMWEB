  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Kota</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= BASEURL; ?>/kota/updateKota" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $data['kota']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama kota</label>
                    <input type="text" class="form-control" placeholder="masukkan kota..." name="nama_kota" value="<?= $data['kota']['nama_kota']; ?>">
                    <label >Nama Provinsi</label>
                    <input type="text" class="form-control" placeholder="masukkan provinsi..." name="provinsi" value="<?= $data['kota']['provinsi']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->