<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM URGENT DI BAWAH</h3>

            <form method="post" action="<?= base_url('/post/update/urgent/'.$urgent['id'])?>">
                <div>
                    <input type="text" placeholder="Nama Pasien" name="nama" value="<?= $urgent['nama']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Golongan Darah" name="golongan_darah" value="<?= $urgent['golongan_darah']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Provinsi" name="provinsi" value="<?= $urgent['provinsi']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Kota" name="kota" value="<?= $urgent['kota']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Rumah Sakit" name="rumah_sakit" value="<?= $urgent['rumah_sakit']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Narahubung" name="narahubung" value="<?= $urgent['narahubung']; ?>">
                </div>
                <div>
                    <input type="number" placeholder="Kontak" name="kontak" value="<?= $urgent['kontak']; ?>">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
