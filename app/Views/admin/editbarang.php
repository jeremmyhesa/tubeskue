<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/admin/tambahbarang" class="btn btn-success mt-3">Tambah Barang</a>
            <h1 class="mt-4">Cart</h1>

            <?php if (session()->getFlashdata('pesan')) :?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan');?>
            </div>
            <?php endif;?>

            <table class="table table-hover m-3 mb-5 text-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Harga Barang (Rp)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="justify-content-center align-item-center">
                    <?php $i = 1; ?>
                    <!-- memanggil data dari tabel di database -->
                    <?php foreach ($barang as $brg) : ?>
                        <tr class="align-item-center">
                            <th scope="row"><?= $i++; ?>
                            </th>
                            <td>
                                <img src="/img/<?= $brg['gambar']; ?>" alt="" class="gambar">
                            </td>
                            <td>
                                <?= $brg['nama']; ?>
                            </td>
                            <td>
                                <?= $brg['jenis']; ?>
                            </td>
                            <td>
                                <?="Rp", number_format($brg['harga'],0,',','.') ; ?>
                            </td>

                            <td>
                                <a href="/admin/edit/<?= $brg['slug']; ?>" class="btn btn-primary">Edit</a>
                               <form action="/admin/<?= $brg['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                               <input type="hidden" name="_method" value="DELETE">
                               <button type="submit" class="btn btn-danger" 
                               onclick="return confirm('apakah anda yakin ingin menghapus?'); ">Delete</button>
                               </form>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>