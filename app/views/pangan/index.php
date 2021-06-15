<div class="content-wrapper">
    
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title'] ?></h3>
                <div class="btn-group float-right">
                    <a href="<?= BASEURL; ?>/pangan/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Pangan
                    </a>
                    <!-- <a href="<?= BASEURL; ?>/pangan/laporan" class="btn float-right btn-xs btn btn-info">Laporan Pangan</a> -->
                    <a href="<?= BASEURL; ?>/pangan/lihatlaporan" class="btn float-right btn-xs btn btn-warning">Lihat Laporan Pangan</a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= BASEURL; ?>/pangan/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key" >
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/pangan" >Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Komoditas</th>
                            <th>Kategori</th>
                            <th>Kota</th>
                            <th>Harga</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($data['pangan'] as $row) :?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['komoditas'];?></td>
                            <td><?= $row['nama_kategori'];?></td>
                            <td><?= $row['kota'];?></td>
                            <td><?= $row['harga'];?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/pangan/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> <a href="<?= BASEURL; ?>/pangan/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus
                                </a>
                            </td>
                        </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
        
    </section>
    <!-- ORI -->
    
</div>