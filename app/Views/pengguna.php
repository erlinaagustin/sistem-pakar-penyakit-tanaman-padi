<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pengguna</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Pengguna</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="/pengguna/tambah" class="btn btn-primary mb-2">+ Tambah</a>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengguna</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
              <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
            <?php if(!empty($pengguna) && is_array($pengguna)): ?>
                                        <?php $no = 1; ?>
                                        <?php foreach($pengguna as $item): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?= $item['username'] ?></td>
                                                <td><?= $item['email'] ?></td>
                                                <td><?= $item['name'] ?></td>
                                                <td>
                                                <a href="/pengguna/edit/<?= $item['id']; ?>"><i class='bx bx-edit'></i></a>
                                                    &nbsp;<!-- Menambahkan spasi -->
                                                    &nbsp;<!-- Menambahkan spasi -->
                                                    <a href="/pengguna/delete/<?= $item['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class='bx bx-trash' ></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3">Tidak ada data kondisi.</td>
                                        </tr>
                                    <?php endif; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include('layouts/footer.php'); ?> 


