<div class="p-3 mb-2 bg-primary text-white">
    <?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mt-4 text-gray-900 mx-5">About Us</h3>
                <table class="table">
                    <tbody>

                        <td>
                            <div class="text-center">
                                <h4 clss="mt-2" style="font-family:montserrat,sans-serif">Selamat Datang di Jehashop! </h4>
                                <h4>Ini Sejarah Kami!</h4>
                            </div>
                            <p class="mt-3">JehaShop merupakan suatu bukti perkembangan teknologi di era sekarang ini. Memesan makanan tanpa harus keluar rumah sudah diimplementasikan dan mendapat respon baik dari pengguna.
                                JehaShop memberikan 3 fitur utama untuk kamu yaitu halaman home, daftar kue dan juga troli. Troli akan
                                menjadi tempat kamu untuk menyimpan riwayat kue yang kamu beli.</p>
                        </td>
                    </tbody>
                </table>

                <table class="table">
                    <tbody>


                        <div class="text-center">
                            <h4 clss="mt-2" style="font-family:montserrat,sans-serif">Tim JehaShop</h4>
                        </div>


                        <tr>
                            <td>
                                <div class="mt-2 text-center">
                                    <img src="/img/kokom.jpg" class="img-rounde" alt="foto profil" width="200" height="200">
                                    <p class="mt-3">Atika Istiqomah</p>
                                    <p>1817051004</p>
                                    <p>Back-end</p>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <img src="/img/raden.jpg" class="img-rounde" alt="foto profil" width="200" height="200">
                                    <p class="mt-3">Anisa Raden</p>
                                    <p>1817051007</p>
                                    <p>Front-end</p>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <img src="/img/jeha.jpg" class="img-rounde" alt="foto profil" width="200" height="200">
                                    <p class="mt-3">Jeremmy Hesa</p>
                                    <p>1817051035</p>
                                    <p>Database</p>
                                </div>
                            </td>


                    </tbody>
                </table>
            </div>
            <?= $this->endSection(); ?>