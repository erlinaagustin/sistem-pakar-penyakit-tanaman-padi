<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Riwayat</h5>

          <?= form_open('data-riwayat/simpan', ['method' => 'post']); ?>
       
        <div class="form-group mb-3">
            <label for="ID_Pasien">Pasien</label>
            <select class="form-control select2" id="ID_Pasien" name="ID_Pasien">
              <?php foreach ($pasien as $p): ?>
                  <option value="<?= $p['ID_Pasien']; ?>"><?= $p['ID_Pasien'] . ' - ' . $p['Nama']; ?></option>
              <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="riwayat_kesehatan">Riwayat Kesehatan</label>
            <textarea class="form-control" id="riwayat_kesehatan" name="riwayat_kesehatan"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="rekomendasi_gizi">Rekomendasi Gizi</label>
            <textarea class="form-control" id="rekomendasi_gizi" name="rekomendasi_gizi"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="created_at">Tanggal</label>
            <input type="date" class="form-control" id="created_at" name="created_at"  required>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    <?= form_close(); ?>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include('layouts/footer.php'); ?>