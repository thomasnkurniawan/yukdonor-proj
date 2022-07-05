<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM DI BAWAH</h3>

            <form method="post" action="/pendonor/save">
                <div>
                    <input type="text" placeholder="Nama" name="nama">
                </div>
                <div>
                    <input type="number" placeholder="Umur" name="umur">
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
                    <input type="text" placeholder="Kecamatan" name="kecamatan">
                </div>
                <div>
                    <input type="text" placeholder="Alamat" name="alamat">
                </div>
                <div>
                    <input type="number" placeholder="Kontak" name="kontak">
                </div>
                <div>
                    <input type="text" placeholder="Terakhir Donor Darah" name="terakhir_donor">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
