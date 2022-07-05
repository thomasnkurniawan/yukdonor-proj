<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="card-section">
        <div class="container">
            <?php 
                $session = session();
                $message = $session->getFlashdata('message');
            ?>
              <?php if($message){ ?>
                <p style="color:green"><?php echo $message?></p>
            <?php } ?>

            <div class="search">
                <input type="search" placeholder="Cari Kota Terdekat">
            </div>

            <div class="grid">
            <?php foreach ($urgents as $urgent) : ?>

                <div class="card">
                    <table>
                        <div class="urgent-table">
                            <h4 class="urgent-title">URGENT</h4>
                            <h5 class="location"><?= $urgent['kota'] ?>, <?= $urgent['provinsi'] ?></h5>
                        </div>
                        <tbody>
                            <tr>
                                <td>Nama Pasien</td>
                                <td>:</td>
                                <td><?= $urgent['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Golongan Darah</td>
                                <td>:</td>
                                <td><?= $urgent['golongan_darah'] ?></td>
                            </tr>
                            <tr>
                                <td>Rumah Sakit</td>
                                <td>:</td>
                                <td><?= $urgent['rumah_sakit'] ?></td>
                            </tr>
                            <tr>
                                <td>Narahubung</td>
                                <td>:</td>
                                <td><?= $urgent['narahubung'] ?></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td><?= $urgent['kontak'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="margin-top-8">
                        <a class="btn btn-outline" href="<?= base_url('/post/edit/urgent/'.$urgent['id']) ?>">Edit</a>
                        <a class="btn border-none" href="<?= base_url('/post/urgent/delete/'.$urgent['id']) ?>">Delete</a>
                    </div>
                </div>
            <?php endforeach ?>

            <?php foreach ($pendonors as $pendonor) : ?>

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
                    <div class="margin-top-4">
                        <a class="btn btn-outline" href="<?= base_url('/post/edit/pendonor/'.$pendonor['id']) ?>">Edit</a>
                        <a class="btn border-none" href="<?= base_url('/post/pendonor/delete/'.$pendonor['id']) ?>">Delete</a>
                    </div>
                </div>
            <?php endforeach ?>


            </div>
         
        </div>
    </section>

<?= $this->endSection() ?>
