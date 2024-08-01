<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-g-3">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pengetahuan</h5>

          <?= form_open('data-pengetahuan/simpan', ['method' => 'post']); ?>

<div id="conditionsContainer">
    <div class="form-group mb-3">
        <label for="gejalaDropdown">Pilih Gejala</label>
        <select class="form-control" name="gejala[]" id="gejalaDropdown">
            <?php foreach($gejala as $g): ?>
                <option value="<?= $g['id_gejala']; ?>"><?= $g['kode_gejala']; ?>-<?= $g['nama_gejala']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group mb-3" id="operatorContainer">
        <label for="operatorDropdown">Operator</label>
        <select class="form-control" id="operatorDropdown">
            <option value="">Pilih Operator</option>
            <option value="AND">AND</option>
            <option value="THEN">THEN</option>
        </select>
    </div>
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
<script>
document.getElementById('conditionsContainer').addEventListener('change', function(event) {
    if (event.target && event.target.id === 'operatorDropdown') {
        const operator = event.target.value;
        const container = document.getElementById('conditionsContainer');

        if (operator === 'THEN') {
            // Tambahkan dropdown penyakit setelah THEN dipilih
            const penyakitDropdown = `
                <div class="form-group mb-3">
                    <label for="penyakitDropdown">Pilih Penyakit</label>
                    <select class="form-control" name="penyakit" id="penyakitDropdown">
                        <?php foreach($penyakit as $p): ?>
                            <option value="<?= $p['kode_penyakit']; ?>"><?= $p['kode_penyakit']; ?>-<?= $p['nama_penyakit']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            `;
            event.target.parentElement.remove(); // Hapus dropdown operator
            container.insertAdjacentHTML('beforeend', penyakitDropdown);
        } else if (operator === 'AND') {
            // Menambahkan dropdown gejala baru
            const newGejalaDropdown = `
                <div class="form-group mb-3">
                    <label for="gejalaDropdown">Pilih Gejala</label>
                    <select class="form-control" name="gejala[]" id="gejalaDropdown">
                        <?php foreach($gejala as $g): ?>
                            <option value="<?= $g['id_gejala']; ?>"><?= $g['kode_gejala']; ?>-<?= $g['nama_gejala']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', newGejalaDropdown);

            // Tambahkan kembali dropdown operator
            const operatorDropdown = `
                <div class="form-group mb-3">
                    <label for="operatorDropdown">Operator</label>
                    <select class="form-control" id="operatorDropdown">
                        <option value="">Pilih Operator</option>
                        <option value="AND">AND</option>
                       
                        <option value="THEN">THEN</option>
                    </select>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', operatorDropdown);
        }
    }
});
</script>

