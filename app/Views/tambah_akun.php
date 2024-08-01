<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Akun</h5>

          <?= form_open('pengguna/simpan', ['method' => 'post']); ?>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        
        <div class="form-group mb-2">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label for="role">Role</label>
            <select name="role" class="form-control">
                <option value="admin">Admin</option>
                <option value="nakes">Tenaga Kesehatan</option>
                <option value="pasien">Pasien</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="password_hash">Password</label>
            <input type="password" name="password_hash" class="form-control" required>
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






