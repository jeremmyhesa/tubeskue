<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Kue</h2>
            <div class="card mt-4 mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $barang['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?= $barang['nama']?></h3>
                            <p class="card-text"><small class="text-muted ">Harga Satuan : </small><?= "Rp", number_format($barang['harga'],0,',','.'); ?></p>
                            <p class="card-text"><small class="text-muted ">Stok Barang : </small><?= $barang['stok']?></p>
                            <p class="card-text"><small class="text-muted ">Nama Toko : </small><?= $barang['toko']?></p>
                            <p class="card-text"><small class="text-muted ">Detail Barang : </small><?= $barang['detail']?></p>
                            
                            <a href="/pages/keranjang"><button class="btn btn-success btn-sm">Tambah ke Keranjang</button></a>
                            <a href="/pages/barang"><button class="btn btn-primary btn-sm">Kembali ke Daftar Kue</button></a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>