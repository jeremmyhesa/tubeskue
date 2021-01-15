<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/css/font-awesome.min.css'); ?>">
</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center mb-4">Keranjang Saya</h1>
        <div class="card">
            <div class="card-header">List Cart</div>
            <div class="card-body">
                <!-- tampilkan pesan success -->
                <?php if (session()->getFlashdata('success') != null) { ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php } ?>
                <!-- selesai menampilkan pesan success -->

                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>No</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Price</th>
                                <th>Ongkir</th>
                                <th>Sub Total</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"></label>
                                </td>
                                <td>1</td>
                                <td>Rainbow Cake</td>
                                <td><img src="/img/rainbow.jpg" width="100px"></td>
                                <td>Rp38.000</td>
                                <td>Rp15.000</td>
                                <td>Rp76.000</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus product ini dari keranjang belanja?')"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-right">Jumlah</td>
                                <td colspan="2">Rp76.000</td>
                            </tr>

                        </tbody>

                    </table>

                    <div class="text-center" action="/pages/checkout">
                        <a href="/pages/checkout" class="btn btn-success my-2">Checkout</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>


<?= $this->endSection(); ?>