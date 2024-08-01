<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12"> 

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengetahuan</h5>

          
          <?= form_open('data-pengetahuan/update/' . $pengetahuan['id_pengetahuan'], ['method' => 'post']); ?>
          
          <!-- Hidden field untuk ID pengetahuan -->
          <input type="hidden" name="id_pengetahuan" value="<?= $pengetahuan['id_pengetahuan']; ?>">

          <div class="form-group mb-3">
            <label for="rules">Rules</label>
            <input type="text" class="form-control" id="rules" name="rules" value="<?= $pengetahuan['rules']; ?>" required>
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
