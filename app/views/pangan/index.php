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
                Tambah Data pangan
            </button>
            <br><br>
            <h3>Daftar pangan</h3>
            <ul class="list-group">
                <?php foreach ($data['pngn'] as $pngn) : ?>
                <li class="list-group-item">
                    <?= $pngn['komoditas']; ?>
                    <a href="<?= BASEURL; ?>/pangan/hapus/<?= $pngn['id']; ?>"
                        class="badge badge-danger float-right ml-1" onclick="return confirm ('yakin?')">Hapus</a>
                    <a href="<?= BASEURL; ?>/pangan/detail/<?= $pngn['id']; ?>"
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
                <h5 class="modal-title" id="judulModal">Tambah data pangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pangan/tambah" method="POST">
                    <div class="form-group">
                        <label for="komoditas">Komoditas</label>
                        <input type="text" class="form-control" id="komoditas" name="komoditas">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
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