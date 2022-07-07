<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="card-section">
        <div class="container">

            <div class="search">
                <form action="/urgent/search" method="post">

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
            
            <?php foreach ($list as $urgent) : ?>

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
                </div>
                <?php endforeach ?>

            </div>
         
        </div>
    </section>

<?= $this->endSection() ?>
