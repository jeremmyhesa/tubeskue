<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Edit Barang</h2>
            <form action="/admin/update/<?= $barang['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $barang['gambar']; ?>">

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Kue</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ?
                        'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama')) ?
                        old('nama') : $barang['nama'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Kue</label>
                    <div class="col-sm-10">
                    
                    <select class="form-control<?= ($validation->hasError('jenis')) ?
                        'is-invalid' : ''; ?>" id="jenis" name="jenis" placeholder="Jenis Kue" autofocus value ="<?= old('jenis'); ?>" >
                        <div class="invalid-feedback">
                            <?= $validation->getError('jenis'); ?>
                        </div>>
                    <option>Kering</option>
                    <option>Basah</option>
                    <option>Birthday Cake</option>
                    </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('harga')) ?
                        'is-invalid' : ''; ?>" id="harga" name="harga" autofocus value= "<?= (old('harga')) ?
                        old('harga') : $barang['harga'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('stok')) ?
                        'is-invalid' : ''; ?>" id="stok" name="stok" autofocus value= "<?= (old('stok')) ?
                        old('stok') : $barang['stok'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('stok'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="detail" class="col-sm-2 col-form-label">Detail Barang</label>
                    <div class="col-sm-10">
                        <input type="textarea" rows="3" class="form-control <?= ($validation->hasError('detail')) ?
                        'is-invalid' : ''; ?>" id="detail" name="detail" placeholder="Detail Barang" autofocus value ="<?= (old('detail')) ?
                        old('detail') : $barang['detail'] ?>"> 
                        <div class="invalid-feedback">
                            <?= $validation->getError('detail'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="toko" class="col-sm-2 col-form-label">Nama Toko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('toko')) ?
                        'is-invalid' : ''; ?>" id="toko" name="toko" autofocus value="<?= (old('toko')) ?
                        old('toko') : $barang['toko'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('toko'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $barang['gambar']?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ?
                            'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="gmbPrev()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar"><?= $barang['gambar']; ?></label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Barang</button>

                <br>
                <br>
                <a href=/admin/editbarang>Kembali ke menu barang</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>