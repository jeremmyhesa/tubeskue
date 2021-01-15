<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="contrainer">
    <div class="row">
        <div class="col">

            <table class="table table-hover mb-5 text-center">
                <thead>
                    <tr>
                        <th>No.ID</th>
                        <th>Bank</th>
                        <th>Harga</th>
                        <th>Kurir</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="align-item-center">
                    <tr>
                        <td>xxxxxxxxx</td>
                        <td>Nama Bank</td>
                        <td>Rp.000.000</td>
                        <td>Nama Kurir</td>
                        <td>Sudah Dibayar</td>
                        <td><input type="file" /></td>
                        <td><button class="btn btn-primary mr-3">Upload</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxxxxxxx</td>
                        <td>Nama Bank</td>
                        <td>Rp.000.000</td>
                        <td>Nama Kurir</td>
                        <td>Pesanan Diterima</td>
                        <td><input type="file" /></td>
                        <td><button class="btn btn-primary mr-3">Upload</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxxxxxxx</td>
                        <td>Nama Bank</td>
                        <td>Rp.000.000</td>
                        <td>Nama Kurir</td>
                        <td>Sedang Dikirim</td>
                        <td><input type="file" /></td>
                        <td><button class="btn btn-primary mr-3">Upload</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxxxxxxx</td>
                        <td>Nama Bank</td>
                        <td>Rp.000.000</td>
                        <td>Nama Kurir</td>
                        <td>Belum Bayar</td>
                        <td><input type="file" /></td>
                        <td><button class="btn btn-primary mr-3">Upload</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>