<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Gejala</h5>

          <?= form_open('data-gejala/update', ['method' => 'post']); ?>
          <div class="form-group mb-3">
            <label for="kode_gejala">Kode Gejala</label>
            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?= $gejala['id_gejala']; ?>"  required>
        </div>
        <div class="form-group mb-3">
            <label for="nama_gejala">Nama Gejala</label>
            <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" value="<?= $gejala['nama_gejala']; ?>"  required>
        </div>
        <div class="form-group mb-3">
            <label for="nilai">Nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $gejala['nilai']; ?>"  required>
        </div>
        <div class="form-group mb-3">
            <label for="range_min">Range Min</label>
            <input type="text" class="form-control" id="range_min" name="range_min" value="<?= $gejala['range_min']; ?>"  required>
        </div>
        <div class="form-group mb-3">
            <label for="range_max">Range Max</label>
            <input type="text" class="form-control" id="range_max" name="range_max" value="<?= $gejala['range_max']; ?>"  required>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include('layouts/footer.php'); ?>