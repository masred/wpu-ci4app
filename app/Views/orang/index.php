<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h1 class="mt-2">Daftar Orang</h1>
                            <form action="" method="POST">
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian" name="keyword">
                                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                <?php foreach ($orang as $o) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $o['nama']; ?></td>
                                        <td><?= $o['alamat']; ?></td>
                                        <td><a href="" class="btn btn-success">Detail</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= $pager->links('orang', 'orang_pagination'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>