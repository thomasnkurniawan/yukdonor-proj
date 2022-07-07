<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM URGENT DI BAWAH</h3>

            <form method="post" action="/urgent/save">
                <div>
                    <input type="text" placeholder="Nama Pasien" require name="nama">
                </div>
                <div class="selectWrapper">
                        <select class="selectBox" require name="golongan_darah">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                <div>
                    <input type="text" placeholder="Provinsi" require name="provinsi">
                </div>
                <div>
                    <input type="text" placeholder="Kota" require name="kota">
                </div>
                <div>
                    <input type="text" placeholder="Rumah Sakit" require name="rumah_sakit">
                </div>
                <div>
                    <input type="text" placeholder="Narahubung" require name="narahubung">
                </div>
                <div>
                    <input type="number" placeholder="Kontak" require name="kontak">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
