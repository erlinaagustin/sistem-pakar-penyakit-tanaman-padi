<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pasien</h5>

          <?= form_open('data-pasien/simpan', ['method' => 'post']); ?>
       
        <div class="form-group mb-3">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama"  required>
        </div>
        <div class="form-group mb-3">
            <label for="Nomor_HP">Nomor HP</label>
            <input type="text" class="form-control" id="Nomor_HP" name="Nomor_HP"  required>
        </div>
        
        <div class="form-group mb-3">
            <label for="Alamat">Alamat</label>
            <textarea class="form-control" id="Alamat" name="Alamat"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="'Umur">Umur</label>
            <input type="text" class="form-control" id="Umur" name="Umur"  required>
        </div>
        <div class="form-group mb-3">
            <label for="'Usia_Kehamilan">Usia Kehamilan</label>
            <input type="text" class="form-control" id="Usia_Kehamilan" name="Usia_Kehamilan"  required>
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