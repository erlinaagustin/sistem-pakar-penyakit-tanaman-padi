<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengguna</h5>

          <?= form_open('pengguna/update', ['method' => 'post']); ?>
        <input type="hidden" name="id" value="<?= $pengguna['id']; ?>">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="<?= $pengguna['email'] ?>" required>
        </div>
       
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $pengguna['username'] ?>" required>
        </div>
        <div class="form-group">
            <label for="password_hash">Password</label>
            <input type="password" name="password_hash" class="form-control">
            <i>*Isi jika ingin mengganti password</i>
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








