<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <h3 class="mt-3 text-gray-900 text-center">Daftar Kue</h3>
    
    <div class="row">
    <?php foreach ($barang as $brg) : ?>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title"><?= $brg['nama']; ?></h3>
                    
                    <p class="card-text"><img src="/img/<?= $brg['gambar']; ?>" alt="" 
                        class="gambar" width="300px"></p>
                            
                    <label><?= "Rp", number_format($brg['harga'],0,',','.') ; ?></label><br>

                    <a href="/pages/detail/<?= $brg['slug']; ?>"><button class="btn btn-primary btn-sm">Detail</button></a>
                  
                    <a href="/pages/keranjang"><button class="btn btn-success btn-sm mt-2" class="d-inline">Tambah ke Keranjang</button></a>
                            
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>