<?php namespace App\Controllers;

use App\Models\PenyakitModel;

class PenyakitController extends BaseController
{
   

    public function index()
    {
        $model = new PenyakitModel();
        $data['penyakit'] = $model->findAll();

        return view('tabel_data_penyakit.php', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_data_penyakit.php');
    }

    public function simpan()
    {
        $model = new PenyakitModel();
        $image = $this->request->getFile('image');
        $newName = '';
    
        // Periksa apakah file gambar diunggah
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName(); // Generate nama file acak
            $image->move("uploads", $newName); // Pindahkan file ke direktori 'uploads'
        }
    
        // Mendapatkan kode penyakit baru
        $kodePenyakit = $model->getLastKodePenyakit();
    
        // Lanjutkan dengan menyimpan data
        $data = [
            'kode_penyakit' => $kodePenyakit,
            'nama_penyakit' => $this->request->getPost('nama_penyakit'),
            'penanganan'  => $this->request->getPost('penanganan'),
            'images' => $newName,
        ];
    
        $model->insert($data);
    
        // Redirect ke halaman utama tabel-penyakit setelah penyimpanan berhasil
        return redirect()->to(base_url('data-penyakit'));
    }
    


    public function edit($id)
    {
        $model = new PenyakitModel();
        $data['penyakit'] = $model->find($id);

        helper('form');
        return view('edit_data_penyakit.php', $data);
    }

    public function update()
{
    $model = new PenyakitModel();

    // Ambil data dari formulir
    $id = $this->request->getPost('id');
    $data = [
        'kode_penyakit' => $this->request->getPost('kode_penyakit'),
        'nama_penyakit' => $this->request->getPost('nama_penyakit'),
        'penanganan'  => $this->request->getPost('penanganan'),
    ];

    // Ambil gambar yang diunggah
    $image = $this->request->getFile('image');
    if ($image->isValid()) {
        // Pindahkan gambar ke direktori yang ditentukan
        $newName = $image->getRandomName();
        $image->move("uploads", $newName);
        
        // Masukkan nama gambar ke dalam data
        $data['images'] = $newName;
    }

    // Periksa apakah ada data yang akan diperbarui
    $existingData = $model->find($id);
    if (!$existingData) {
        // Tampilkan pesan kesalahan jika data tidak ditemukan
        session()->setFlashdata('error', 'Data yang ingin diperbarui tidak ditemukan.');
        return redirect()->to(base_url('data-penyakit'));
    }

    // Lakukan pembaruan data
    $model->update($id, $data);

    // Tampilkan pesan sukses
    session()->setFlashdata('success', 'Data berhasil diperbarui.');

    // Redirect ke halaman utama data penyakit
    return redirect()->to(base_url('data-penyakit'));
}

    

    public function delete($id)
    {
        $model = new PenyakitModel();
        $model->delete($id);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-penyakit'));
    }

    public function jumlahPenyakit()
    {
        $model = new PenyakitModel();
        $data['jumlahPenyakit'] = $model->countAll();

        return view('index.php', $data);
    }

    



}
