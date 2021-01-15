<?= $this->extend('layoutadmin/template'); ?>
<?= $this->section('content');  ?>
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="mt-3 text-gray-900">Pemesanan Kue JehaShop</h3>
            <table class="ml-1 table">
                <thead>
                    <tr class="mb-4 text-gray-900">
                        <th>No.</th>
                        <th>Action</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Biaya Pendaftaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Download Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <tr>
                        <th scope="row"><?= $i++; ?>
                        </th>
                        <td>
                            <a href="#" class="btn btn-success mb-1">Validasi</a>
                            <a class="btn btn-danger" href="">
                                Hapus
                            </a>
                            <div id=" " class="modal">
                                <div class="modal-content center-align">
                                    Yakin ingin menghapus akun Anisa dengan email anisaraden@gmail.com? <br>
                                    <a href="" class="btn red">Hapus</a>
                                </div>
                            </div>
                        </td>
                        <td> Anisa Raden</td>
                        <td> 087749046399</td>
                        <td> anisaraden@gmail.com </td>
                        <td> 12/12/2020 </td>
                        <td> Rp20.000 </td>
                        <td>
                            <img src="/img/bukti.jpg " class="responsive-img" width="50" class="gambar">
                        </td>
                        <td>
                            <a href=" " target="blank" download>link</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content');  ?>