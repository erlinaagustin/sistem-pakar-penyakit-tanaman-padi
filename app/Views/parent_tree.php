<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Gambar</h5>

                        <!-- Form untuk mengunggah gambar -->
                        <form action="<?= base_url('parent-tree/upload'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="gambar">Pilih File Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload Gambar</button>
                        </form>

                        <!-- Tampilkan gambar terbaru -->
                        <?php if (!empty($latestParentTree)): ?>
                            <div class="mt-4 text-center">
                                <h5>Gambar Terbaru:</h5>
                                <img src="<?= base_url('uploads/' . $latestParentTree['gambar']); ?>" class="img-fluid rounded" style="max-width: 300px;" alt="Latest Image">
                            </div>
                        <?php else: ?>
                            <p>Tidak ada gambar yang tersedia.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>
