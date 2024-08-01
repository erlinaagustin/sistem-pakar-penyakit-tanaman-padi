<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Gambar</h5>

                        <!-- Form untuk mengunggah gambar -->
                        <form action="<?= base_url('parent-tree/upload'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="image">Pilih File Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload Gambar</button>
                        </form>

                        <!-- Tampilkan gambar jika ada -->
                        <?php if (isset($current_image) && $current_image): ?>
                            <div class="mt-4">
                                <h5>Gambar Saat Ini:</h5>
                                <img src="<?= base_url('uploads/' . $current_image); ?>" class="img-fluid" alt="Current Image">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>
