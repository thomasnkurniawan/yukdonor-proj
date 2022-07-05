<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM URGENT DI BAWAH</h3>

            <form method="post" action="/urgent/save">
                <div>
                    <input type="text" placeholder="Nama Pasien" name="nama">
                </div>
                <div>
                    <input type="text" placeholder="Golongan Darah" name="golongan_darah">
                </div>
                <div>
                    <input type="text" placeholder="Provinsi" name="provinsi">
                </div>
                <div>
                    <input type="text" placeholder="Kota" name="kota">
                </div>
                <div>
                    <input type="text" placeholder="Rumah Sakit" name="rumah_sakit">
                </div>
                <div>
                    <input type="text" placeholder="Narahubung" name="narahubung">
                </div>
                <div>
                    <input type="number" placeholder="Kontak" name="kontak">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
