<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Barang
            </button>
            <br><br>
            <h3>Daftar Barang</h3>
            <ul class="list-group">
                <?php foreach ($data['kota'] as $kota) : ?>
                <li class="list-group-item">
                    <?= $kota['nama_kota']; ?>
                    <a href="<?= BASEURL; ?>/barang/hapus/<?= $kota['id']; ?>"
                        class="badge badge-danger float-right ml-1" onclick="return confirm ('yakin?')">Hapus</a>
                    <a href="<?= BASEURL; ?>/barang/detail/<?= $kota['id']; ?>"
                        class="badge badge-primary float-right ml-2">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/barang/tambah" method="POST">
                    <div class="form-group">
                        <label for="nama_kota">Nama Kota</label>
                        <input type="text" class="form-control" id="nama_kota" name="nama_kota">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="number" class="form-control" id="provinsi" name="provinsi">
                    </div>
                    
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
