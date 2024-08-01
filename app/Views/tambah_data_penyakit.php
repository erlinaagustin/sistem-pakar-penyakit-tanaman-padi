<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Penyakit</h5>

          <?= form_open('data-penyakit/simpan', ['method' => 'post', 'enctype' => 'multipart/form-data']); ?>

       
          <!-- <div class="form-group mb-3">
            <label for="kode_penyakit">Kode Penyakit</label>
            <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit"  required>
        </div> -->
        <div class="form-group mb-3">
            <label for="nama_penyakit">Nama Penyakit</label>
            <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit"  required>
        </div>
        <div class="form-group mb-3">
            <label for="penanganan">Penanganan</label>
            <input type="text" class="form-control" id="penanganan" name="penanganan"  required>
        </div>
        <div class="form-group mb-3">
                    <label for="image">Pilih File Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image" onchange="updateLabel()">
                        <label class="custom-file-label" for="image">Pilih file...</label>
                    </div>
                </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<script>
    function updateLabel() {
        var input = document.getElementById('image');
        var label = input.nextElementSibling;
        label.innerText = input.files[0] ? input.files[0].name : 'Pilih file...';
    }
</script>

<?php include('layouts/footer.php'); ?>