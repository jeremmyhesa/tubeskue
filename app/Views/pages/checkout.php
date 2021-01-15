<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1>Checkout</h1>

    <div class="row">
        <div class="col-5  mr-5">
            <h4>Data Customer</h4>
            <label class="mr-1">Nama Penerima: </label>
            <input class="form-control" />
            <label class="mr-1">No. Telepon Penerima: </label>
            <input class="form-control" />
            <label class="mr-1">Alamat Pengiriman: </label>
            <textarea type="text-area" class="form-control mb-2" placeholder="Type Your Address Here"></textarea>
            <label class="mr-1">Pilih Bank: </label>
            <select class="form-control">
                <option value="BCA">BCA</option>
                <option value="BRI">BRI</option>
                <option value="BNI">BNI</option>
                <option value="MANDIRI">MANDIRI</option>
            </select>
            <label class="mr-1">Pilih Kurir: </label>
            <select class="form-control">
                <option value="JNE">JNE</option>
                <option value="JNT">JNT</option>
                <option value="TIKI">TIKI</option>
            </select>
        </div>
        <div class="col-5 border border-dark border-7">
            <h3>Product</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Contoh Nama</td>
                        <td>Rp.000.000</td>
                        <td>3</td>
                        <td>Rp.000.000</td>
                    </tr>
                    <tr>
                        <td>Contoh Nama</td>
                        <td>Rp.000.000</td>
                        <td>3</td>
                        <td>Rp.000.000</td>
                    </tr>
                    <tr>
                        <td>Contoh Nama</td>
                        <td>Rp.000.000</td>
                        <td>3</td>
                        <td>Rp.000.000</td>
                    </tr>
                    <tr>
                        <td>Contoh Nama</td>
                        <td>Rp.000.000</td>
                        <td>3</td>
                        <td>Rp.000.000</td>
                    </tr>
                </tbody>
            </table>
            <h5 class="font-weight-bold">TOTAL PEMBAYARAN :Rp. {this.totalHarga()}</h5>
        </div>
    </div>
    <a href="/pages/sukses" class="btn btn-success my-2">Order</a>
    <a href="/pages/sukses" class="btn btn-primary my-2">Back To Shop</a>


</div>

<?= $this->endSection(); ?>