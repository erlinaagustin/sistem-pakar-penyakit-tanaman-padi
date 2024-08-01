<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengguna</h5>

          <?= form_open('pengguna/simpan', ['method' => 'post']); ?>

<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value = "<?= $pengguna['email'] ?>">
</div>

<div class="form-group mb-3">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" value = "<?= $pengguna['username'] ?>">
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
















