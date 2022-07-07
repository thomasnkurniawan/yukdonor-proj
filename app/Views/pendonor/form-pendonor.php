<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM DI BAWAH</h3>

            <form method="post" action="/pendonor/save">
                <div>
                    <input type="text" required placeholder="Nama" name="nama">
                </div>
                <div>
                    <input type="number" required placeholder="Umur" name="umur">
                </div>
                <div class="select-container">
                    <div class="select-label">
                        <span>Golongan Darah</span>
                    </div>
                    <div class="selectWrapper">
                        <select class="selectBox" name="golongan_darah">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input type="text" required placeholder="Provinsi" name="provinsi">
                </div>
                <div>
                    <input type="text" required placeholder="Kota" name="kota">
                </div>
                <div>
                    <input type="text" required placeholder="Kecamatan" name="kecamatan">
                </div>
                <div>
                    <input type="text" required placeholder="Alamat" name="alamat">
                </div>
                <div>
                    <input type="number" required placeholder="Kontak" name="kontak">
                </div>
                <div>
                    <input type="text" required placeholder="Terakhir Donor Darah" name="terakhir_donor">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
