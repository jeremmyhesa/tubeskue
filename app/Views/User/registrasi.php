<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrasi | JehaShop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        
        <form action="/user/save" method="post" class="form-horizontal">
        <?= csrf_field(); ?>

            <div class="form-group">
                <label class="control-label col-xs-2" for="inputEmail">Email</label>
                <div class="col-xs-9">
                    <input type="email" class="form-control <?= ($validation->hasError('inputEmail')) ?
                    'is-invalid' : ''; ?>" name="inputEmail" placeholder="Email" autofocus value ="<?= old('inputEmail'); ?>">
                    <div class="invalid-feedback">
                    <?= $validation->getError('inputEmail'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="inputPassword">Kata Sandi</label>
                <div class="col-xs-9">
                    <input type="password" class="form-control <?= ($validation->hasError('inputPassword')) ?
                    'is-invalid' : ''; ?>" name="inputPassword" placeholder="Masukan Kata Sandi" autofocus value ="<?= old('inputPassword'); ?>">
                    <div class="invalid-feedback">
                    <?= $validation->getError('inputPassword'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="rePassword">Ulang Kata Sandi</label>
                <div class="col-xs-9">
                    <input type="password" class="form-control <?= ($validation->hasError('rePassword')) ?
                    'is-invalid' : ''; ?>" name="rePassword" placeholder="Masukan Ulang Kata Sandi">
                    <div class="invalid-feedback">
                    <?= $validation->getError('rePassword'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="Username">Username</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control <?= ($validation->hasError('Username')) ?
                    'is-invalid' : ''; ?>" name="Username" placeholder="Username">
                    <div class="invalid-feedback">
                    <?= $validation->getError('Username'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="Nama">Nama Lengkap</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama Anda">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="telpon">No. Telp</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="telpon" placeholder="Nomor Telepon / Handphone">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="tanggal">Tanggal Lahir</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="tanggal" placeholder="dd/mm/yyyy">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="alamat">Alamat</label>
                <div class="col-xs-9">
                    <textarea rows="3" class="form-control <?= ($validation->hasError('alamat')) ?
                    'is-invalid' : ''; ?>" name="alamat" placeholder="Masukan Alamat Lengkap" autofocus value ="<?= old('alamat'); ?>"></textarea>
                    <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="kodepos">Kode Pos</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-2" for="level">Level</label>
                <div class="col-xs-2">
                    <select name="level" id="">
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-9">
                    <button type="submit" class="btn btn-primary">Regis</button>

                    <br>
                    <br>
                    <a href="/" class="small" >Already have an account? Sign In</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>