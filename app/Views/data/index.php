<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Laporan Sirkulasi</h1>
            <a href="/data/create" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">No. Inventaris</th>
                            <th scope="col">Judul</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Status</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $d['barcode']; ?></td>
                                <td><?= $d['no_inventaris']; ?></td>
                                <td><?= $d['judul']; ?></td>
                                <td><?= $d['nim']; ?></td>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['tgl_pinjam']; ?></td>
                                <td><?= $d['status']; ?></td>
                                <td><?= $d['prodi']; ?></td>
                                <td><a href="/data/<?= $d['nim']; ?>" class="btn btn-success">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>