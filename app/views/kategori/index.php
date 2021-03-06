<!-- Content fluid-->
<div class="content-fluid">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Kategori</h1>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::flash();
          ?>
        </div>
      </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3>
          <a href="<?= BASEURL; ?>/kategori/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Kategori
          </a>
          <a href="<?= BASEURL; ?>/kota" title="" class="btn float-right btn-xs btn btn-success">
                    Kota Detail
          </a>
        </div>
        <div class="card-body">
          
          <form action="<?= BASEURL; ?>/kategori/cari" method="post">
            <div class="row mb-3">
              <div class="col-lg-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="key" >
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/kategori" >Reset</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <table class="table table-bordered" id="table_kategori">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Kategori</th>
                <th style="width: 300px" >OPSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              <?php foreach ($data['kategori'] as $row) :?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_kategori'];?></td>
                <td>
                  
                  <a href="<?= BASEURL; ?>/kategori/edit/<?= $row['id'] ?>" class="badge badge-info ">
                    Edit
                  </a>
                  <a href="<?= BASEURL; ?>/kategori/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">
                    Hapus
                  </a>
                </td>
              </tr>
              <?php $no++; endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-fld -->
  <!-- <script>
$(document).ready(function(){
$('#table_kategori').DataTable();
});
</script> -->