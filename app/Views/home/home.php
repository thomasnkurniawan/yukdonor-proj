<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

 <!-- Start of Hero -->
 <section class="hero">
        <div class="container grid">
            <div class="hero-text">
                <h1>Donor <span>Darah</span>, Selamatkan Nyawa</h1>
                <p>YukDonor adalah sebuah platform digital yang dibuat untuk memudahkan masyarakat dalam mencari sukarelawan yang berada di wilayahnya</p>
                <a href="#" class="btn-hero">Cari Pendonor</a>
            </div>

            <img src="<?= base_url('assets/images/Hero Picture.svg')?>" alt="Hero">
        </div>
    </section>
    <!-- End of Hero -->

    <!-- Start of Content -->
    <section class="content">
        <div class="container grid">
            <div class="content-card">
                <div class="card-number">
                    <h1 class="first">1</h1>
                </div>
                <h3>TEMUKAN</h3>
                <p>Cek menu List Pendonor, dan temukan
                    sukarelawan yang berada di dekatmu</p>
            </div>
            <div class="content-card">
                <div class="card-number2">
                    <h1 class="second">2</h1>
                </div>
                <h3>HUBUNGI</h3>
                <p>Lalu, hubungi kontak sukarelawan yang tertera di card untuk info lebih lanjut</p>
            </div>
            <div class="content-card">
                <div class="card-number3">
                    <h1 class="third">3</h1>
                </div>
                <h3>DONORKAN</h3>
                <p>Donorkan darahmu dan mulailah membantu orang yang membutuhkan</p>
            </div>
        </div>
    </section>
    <!-- End of Content -->

<?= $this->endSection() ?>
