<?php include('layouts/header_lp.php'); ?>
<?php include('layouts/hero_lp.php'); ?>

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Jaga Padi</h3>
                        <h2>Sistem Pakar Diagnosa Penyakit Padi</h2>
                        <p>
                            Periksakan kesehatan padimu disini ^^
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="https://wikifarmer.com/id/informasi-tentang-tanaman-padi/" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo base_url(); ?>/landing_page/assets/img/7919260.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <section id="symptoms" class="symptoms">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Diagnosa Gejala Penyakit Padi</h2>
                <p>Silahkan pilih gejala yang dialami oleh tanaman padi Anda:</p>
            </div>

            <form action="<?= site_url('diagnosa'); ?>" method="post">
                <?php foreach ($gejala as $item): ?>
                    <div class='form-check'>
                        <input class='form-check-input' type='checkbox' name='gejala[]' id='gejala<?= $item['id_gejala']; ?>' value='<?= $item['id_gejala']; ?>'>
                        <label class='form-check-label' for='gejala<?= $item['id_gejala']; ?>'>
                        <?= $item['kode_gejala']; ?> - <?= $item['nama_gejala']; ?>
                    </label>
                    </div>
                <?php endforeach; ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Diagnosa</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Section baru untuk hasil diagnosa -->
    <?php if (session()->getFlashdata('diagnosa')): ?>
        <section id="diagnosa-result-section" class="diagnosa-result-section">
            <div class="container" data-aos="fade-up">
                <div class="diagnosa-result">
                    <h3>Hasil Diagnosa:</h3>
                    <p><?= session()->getFlashdata('diagnosa'); ?></p>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main><!-- End #main -->

<?php include('layouts/footer_lp.php'); ?>

<!-- Tambahkan script ini di bagian bawah sebelum </body> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Cek apakah ada flashdata diagnosa
        <?php if (session()->getFlashdata('diagnosa')): ?>
            // Scroll ke bagian hasil diagnosa
            document.getElementById('diagnosa-result-section').scrollIntoView({ behavior: 'smooth' });
        <?php endif; ?>
    });
</script>
