<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-g-3">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Penyakit</h5>

                        <form action="<?= base_url('data-penyakit/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= isset($penyakit['id']) ? $penyakit['id'] : ''; ?>">

                            <div class="form-group mb-3">
                                <label for="kode_penyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit" value="<?= isset($penyakit['kode_penyakit']) ? $penyakit['kode_penyakit'] : ''; ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_penyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" value="<?= isset($penyakit['nama_penyakit']) ? $penyakit['nama_penyakit'] : ''; ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="penanganan">Penanganan</label>
                                <input type="text" class="form-control" id="penanganan" name="penanganan" value="<?= isset($penyakit['penanganan']) ? $penyakit['penanganan'] : ''; ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Pilih File Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>

<script>
    function updateLabel() {
        var input = document.getElementById('image');
        var label = input.nextElementSibling;
        label.innerText = input.files[0] ? input.files[0].name : 'Pilih file...';
    }
</script>
