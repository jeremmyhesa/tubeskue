<?php if(allow('Admin')) :?>
<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="mt-5 mb-4 text-gray-900">Selamat Datang Admin !</h3>
    <p>Silahkan Cek Menu Pesanan di Sidebar</p>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>


<?php elseif(allow('User')) :?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <!-- Page Heading -->
            <h3 class="mt-4 text-gray-900">Selamat Datang di Toko Kue JehaShop</p>
                <h4>Selamat Berbelanja dan Nikmati Kue Termanis Mu ^^</h4>
                <div class="row row-cols-1 row-cols-md-3 g-">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="/img/kuebasah.jpg " class="responsive-img" width="150" class="gambar">
                                <h5 class="card-title mt-2">Kue Basah</h5>
                                <p class="card-text">Temukan Kue Basah Kesukaan Mu Di Sini.</p>
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="/img/kuekering.jpg " class="responsive-img" width="150" class="gambar">
                                <h5 class="card-title mt-2">Kue Kering</h5>
                                <p class="card-text">Kue Ranyah Yang Kamu Cari Di Sini</p>
                                <a href="#" class="btn btn-primary">Lhat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="/img/kuekering.jpg " class="responsive-img" width="150" class="gambar">
                                <h5 class="card-title mt-2">Birthday Cake</h5>
                                <p class="card-text">Kue Spesial Untuk Yang Spesial</p>
                                <a href="#" class="btn btn-primary">Lhat</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?= $this->endSection(); ?>
<?php endif;?>