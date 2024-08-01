<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>


            <div class="card-body">
              <h5 class="card-title">Jumlah Penyakit</h5>
              <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class='bx bxs-user'></i>
                  </div>
                  <div class="ps-3">
                      <h6><?= $jumlahPenyakit; ?></h6>
                  </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Jumlah Gejala</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class='bx bxs-first-aid'></i>
                </div>
                <div class="ps-3">
                  <h6><?= $jumlahGejala; ?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        
                <!-- Bagian Grafik Kenaikan Berat Badan
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik Kenaikan Berat Badan</h5>
            <canvas id="lineChart" style="max-height: 400px;"></canvas>
        </div>
    </div>
</div> -->

<!-- <script>
document.addEventListener("DOMContentLoaded", () => {
    const beratBadanData = JSON.parse('');
    const labels = beratBadanData.map(item => new Date(item.created_at).toLocaleDateString());
    const dataPoints = beratBadanData.map(item => item.berat_badan);

    new Chart(document.querySelector('#lineChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Berat Badan',
                data: dataPoints,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script> -->



        <!-- <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Usia Kehamilan Pasien</h5> -->

              <!-- Bar Chart -->
              <!-- <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
    document.addEventListener("DOMContentLoaded", () => {
        const usiaKehamilanData = JSON.parse('');
        const labels = usiaKehamilanData.map(item => item.Usia_Kehamilan + ' minggu');
        const dataPoints = usiaKehamilanData.map(item => item.Jumlah);

        new Chart(document.querySelector('#barChart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Pasien per Usia Kehamilan',
                    data: dataPoints,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',  // Contoh warna
                    borderColor: 'rgb(54, 162, 235)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
    </script> -->
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

  </div>
</section>

</main><!-- End #main -->

<?php include('layouts/footer.php'); ?>