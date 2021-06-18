<div class="content-fluid">
    
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
                
                <div class="container" >
                    <table class="table table-bordered table-striped" id="table_pangan" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th style="width: 350px">Komoditas</th>
                                <th style="width: 100px">Kategori</th>
                                <th style="width: 200px">Kota</th>
                                <th style="width: 100px">Harga</th>
                                <th style="width: 150px" class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($data['pangan'] as $row) :?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['komoditas'];?></td>
                                <td><?= $row['nama_kategori'];?></td>
                                <td><?= $row['nama_kota'];?></td>
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
        </div>
        <div class="card-footer">
            
        </div>
    </div>
    
</section>

</div>
<script>
$(document).ready(function(){
$('#table_pangan').DataTable();
});
</script>