<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Penyakit</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Penyakit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="data-penyakit/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Penyakit</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Penyakit</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($penyakit) && is_array($penyakit)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($penyakit as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['kode_penyakit']); ?></td>
                                <td><?php echo esc($item['nama_penyakit']); ?></td>
                                <td><img src="<?= base_url('uploads/' . $item['images']); ?>" alt="Gambar Penyakit" width="50"></td>
                                <td>
                                    <a href="data-penyakit/edit/<?php echo $item['id']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="data-penyakit/delete/<?php echo $item['id']; ?>"><i class='bx bxs-trash' ></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                 <td colspan="3">Tidak ada data kategori.</td>
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