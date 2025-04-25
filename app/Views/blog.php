<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <!-- Blog Card List -->
    <div class="row g-4">
        <!-- Blog Post 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">Cara Membuat Blog Responsif</h5>
                    <h6 class="card-subtitle mb-2 text-muted">oleh Daniel Aquaries Pratama - 24 April 2025</h6>
                    <p class="card-text">Pelajari langkah-langkah mudah untuk membuat blog responsif menggunakan
                        Bootstrap 5 dan komponen layout yang tersedia.</p>
                    <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">Tips Menulis Judul yang Menarik</h5>
                    <h6 class="card-subtitle mb-2 text-muted">oleh Bella Antrifosa - 22 April 2025</h6>
                    <p class="card-text">Judul yang menarik adalah kunci agar pembaca tertarik membuka artikelmu.
                        Berikut tips-tipsnya!</p>
                    <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <!-- <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">Apa Itu SEO dan Mengapa Penting?</h5>
                    <h6 class="card-subtitle mb-2 text-muted">oleh Daniel Aquaries Pratama - 20 April 2025</h6>
                    <p class="card-text">SEO membantu artikelmu ditemukan di Google. Yuk pelajari dasar-dasarnya di
                        artikel ini.</p>
                    <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div> -->

    </div>
</div>
<?= $this->endSection() ?>