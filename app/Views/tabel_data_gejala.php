<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Gejala</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Gejala</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <a href="data-gejala/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Gejala</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th>Nilai</th>
                <th>Range Min</th>
                <th>Range Max</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($gejala) && is_array($gejala)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($gejala as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['kode_gejala']); ?></td>
                                <td><?php echo esc($item['nama_gejala']); ?></td>
                                <td><?php echo esc($item['nilai']); ?></td>
                                <td><?php echo esc($item['range_min']); ?> </td>
                                <td><?php echo esc($item['range_max']); ?> </td>
                                <td>
                                    <a href="data-gejala/edit/<?php echo $item['id_gejala']; ?>"><i class='bx bxs-edit'></i></a>
                                    &nbsp;<!-- Menambahkan spasi -->
                                    <a href="data-gejala/delete/<?php echo $item['id_gejala']; ?>"><i class='bx bxs-trash' ></i></a>
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