<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="card-section">
        <div class="container">

        <div class="search">
                <form action="/pendonor/search" method="post">

                    <input type="search" name="keyword" id="search_text" placeholder="Cari Kota Terdekat">
                    <input type="submit" class="btn" style="color: white;" value="Cari" />
                </form>
            </div>

            <?php 
                $session = session();
                $notfound = $session->getFlashdata('notfound');
            ?>
              <?php if($notfound){ ?>
                <div style="text-align: center">
                    <p style="color:black; align-self: center;"><?php echo $notfound?></p>
                </div>
            <?php } ?>

            <div class="grid">
            <?php foreach ($list as $pendonor) : ?>

                <div class="card">
                    <table>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?= $pendonor['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><?= $pendonor['umur'] ?></td>
                            </tr>
                            <tr>
                                <td>Golongan Darah</td>
                                <td>:</td>
                                <td><?= $pendonor['golongan_darah'] ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?= $pendonor['provinsi'] ?></td>
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td>:</td>
                                <td><?= $pendonor['kota'] ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td><?= $pendonor['kecamatan'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?= $pendonor['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td><?= $pendonor['kontak'] ?></td>
                            </tr>
                            <tr>
                                <td>Terakhir Donor Darah</td>
                                <td>:</td>
                                <td><?= $pendonor['terakhir_donor'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endforeach ?>

            </div>
         
        </div>
    </section>

<?= $this->endSection() ?>
