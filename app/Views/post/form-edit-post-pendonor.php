<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="form">
        <div class="container grid">
            <h3>ISI FORM DI BAWAH</h3>

            <form method="post" action="<?= base_url('/post/update/pendonor/'.$pendonor['id'])?>">
                <div>
                    <input type="text" placeholder="Nama" name="nama" value="<?= $pendonor['nama']; ?>">
                </div>
                <div>
                    <input type="number" placeholder="Umur" name="umur" value="<?= $pendonor['umur']; ?>">
                </div>
                <div class="select-container">
                    <div class="select-label">
                        <span>Golongan Darah</span>
                    </div>
                    <div class="selectWrapper">
                        <select class="selectBox" name="golongan_darah" value="<?= $pendonor['golongan_darah']; ?>">
                            <option value="A+"<?=$pendonor['golongan_darah'] == 'A+' ? ' selected="selected"' : '';?>>A+</option>
                            <option value="A-"<?=$pendonor['golongan_darah'] == 'A-' ? ' selected="selected"' : '';?>>A-</option>
                            <option value="B+"<?=$pendonor['golongan_darah'] == 'B+' ? ' selected="selected"' : '';?>>B+</option>
                            <option value="B-"<?=$pendonor['golongan_darah'] == 'B-' ? ' selected="selected"' : '';?>>B-</option>
                            <option value="O+"<?=$pendonor['golongan_darah'] == 'O+' ? ' selected="selected"' : '';?>>O+</option>
                            <option value="O-"<?=$pendonor['golongan_darah'] == 'O-' ? ' selected="selected"' : '';?>>O-</option>
                        </select>
                    </div>
                </div>
                <div>
                    <input type="text" placeholder="Provinsi" name="provinsi" value="<?= $pendonor['provinsi']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Kota" name="kota" value="<?= $pendonor['kota']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Kecamatan" name="kecamatan" value="<?= $pendonor['kecamatan']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Alamat" name="alamat" value="<?= $pendonor['alamat']; ?>">
                </div>
                <div>
                    <input type="number" placeholder="Kontak" name="kontak" value="<?= $pendonor['kontak']; ?>">
                </div>
                <div>
                    <input type="text" placeholder="Terakhir Donor Darah" name="terakhir_donor" value="<?= $pendonor['terakhir_donor']; ?>">
                </div>
                <button type="submit">KIRIM</button>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
