  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Pangan</h1>
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
              <form role="form" action="<?= BASEURL; ?>/pangan/simpanpangan" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Komoditas</label>
                    <input type="text" class="form-control" placeholder="masukkan komoditas..." name="komoditas">
                  </div>                  
                  <div class="form-group">
                    <label >Kota</label>
                    <select class="form-control" name="kota">
                        <option value="">Pilih Kota</option>
                         <?php foreach ($data['kota'] as $row) :?>
                        <option value="<?= $row['id']; ?>"><?= $row['nama_kota']; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>                  
                  <div class="form-group">
                    <label >Kategori</label>
                    <select class="form-control" name="kategori">
                        <option value="">Pilih Kategori</option>
                         <?php foreach ($data['kategori'] as $row) :?>
                        <option value="<?= $row['id']; ?>"><?= $row['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" placeholder="masukkan harga ..." name="harga">
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