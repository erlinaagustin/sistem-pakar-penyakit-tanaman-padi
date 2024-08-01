<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pasien</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data Pasien</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 <!-- Tombol Tambah Data -->
 <!-- <a href="/data-pasien/tambah" class="btn btn-primary mb-3">+ Tambah</a> -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pasien</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Usia Kehamilan</th>
              
              </tr>
            </thead>
            <tbody>
                <?php if(!empty($pasien) && is_array($pasien)): ?>
                    <?php $no = 1; ?>
                        <?php foreach($pasien as $item): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo esc($item['ID_Pasien']); ?></td>
                                <td><?php echo esc($item['Nama']); ?></td>
                                <td><?php echo esc($item['Nomor_HP']); ?></td>
                                <td><?php echo esc($item['Alamat']); ?></td>
                                <td><?php echo esc($item['Umur']); ?></td>
                                <td><?php echo esc($item['Usia_Kehamilan']); ?> minggu</td>
                               
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