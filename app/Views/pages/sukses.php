<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="contrainer">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Status Checkout
                </div>
                <div class="card-header">
                    <h1>ID Pesanan : 118GFJ8UFS</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pesanan Anda Berhasil</h5>
                    <p class="card-text">Lakukan Pembayaran Sesuai Dengan Metode Bank Yang Anda Pilih !</p>
                    <p class="card-text">Upload Bukti Pembayaran Di Sini</p>
                    <a href="/pages/payment" class="btn btn-primary">Bayar</a>
                </div>
                <div class="card-footer text-muted">
                    Lakukan Pembayaran Paling Lambang 3 Hari Setelah Pesan Ini Muncul
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>