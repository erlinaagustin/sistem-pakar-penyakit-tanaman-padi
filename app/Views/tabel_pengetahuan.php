<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pengetahuan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Pengetahuan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="data-pengetahuan/tambah" class="btn btn-primary mb-3">+ Tambah</a>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengetahuan</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
               
                <th>Rules</th>
                <th>Nilai Defuzzyfikasi</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                <?php if(!empty($pengetahuan) && is_array($pengetahuan)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($pengetahuan as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                
                                <td><?php echo esc($item['rules']); ?></td>
                                <td><?php echo number_format($item['defuzzyfikasi'], 2); ?>%</td>

                                <td><?php echo esc($item['kategori']); ?></td>
                               
                                <td>
                                    <a href="data-pengetahuan/edit/<?php echo $item['id_pengetahuan']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="data-pengetahuan/delete/<?php echo $item['id_pengetahuan']; ?>"><i class='bx bxs-trash' ></i></a>
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