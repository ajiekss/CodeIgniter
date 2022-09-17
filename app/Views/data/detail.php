<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detai Data</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Peminjam Buku</h5>
                            <h3 class="card-title"><?php echo $datam['nama'] ?></h3>
                            <h4 class="card-title"><?php echo $datam['nim'] ?></h4>
                            <h4 class="card-title"><?php echo $datam['prodi'] ?></h4>
                            <p class="card-text">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="text-align: left;">Barcode</td>
                                        <td>:</td>
                                        <td><?php echo $datam['barcode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">No. Inventaris</td>
                                        <td>:</td>
                                        <td><?php echo $datam['no_inventaris']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Judul</td>
                                        <td>:</td>
                                        <td><?php echo $datam['judul']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Tanggal Pinjam</td>
                                        <td>:</td>
                                        <td><?php echo $datam['tgl_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Status</td>
                                        <td>:</td>
                                        <td><?php echo $datam['status']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="/data">kembali ke daftar data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>