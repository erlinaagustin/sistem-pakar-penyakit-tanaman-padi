<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Riwayat</h5>

          <?= form_open('data-riwayat/update', ['method' => 'post']); ?>
        <input type="hidden" name="ID_riwayat" value="<?= $riwayat['ID_riwayat']; ?>">
       

        <div class="form-group mb-3">
          <label for="ID_Pasien_Nama">ID Pasien - Nama Pasien</label>
          <input type="text" class="form-control" id="ID_Pasien_Nama" value="<?= $riwayat['ID_Pasien'] . ' - ' . $namaPasien; ?>" readonly>
      </div>
       
        <div class="form-group mb-3">
            <label for="riwayat_kesehatan">Riwayat Kesehatan</label>
            <textarea class="form-control" id="riwayat_kesehatan" name="riwayat_kesehatan" ><?= $riwayat['riwayat_kesehatan']; ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="rekomendasi_gizi">Rekomendasi Gizi</label>
            <textarea class="form-control" id="rekomendasi_gizi" name="rekomendasi_gizi"><?= $riwayat['rekomendasi_gizi']; ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="created_at">Created at</label>
            <input type="date" class="form-control" name="created_at" value="<?= $riwayat['created_at']; ?>">
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