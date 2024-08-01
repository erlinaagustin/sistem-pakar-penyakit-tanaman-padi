<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RiwayatModel;
use App\Models\PasienModel;

class RiwayatController extends BaseController
{
    public function index()
    {
        $model = new RiwayatModel();
        $data['riwayat'] = $model->getRiwayatWithNamaPasien();

        return view('tabel_riwayat', $data);
    }

    public function tambah()
    {
        helper('form');

        $pasienModel = new PasienModel();
        $data['pasien'] = $pasienModel->findAll(); // Mengambil semua data pasien
    
        return view('tambah_data_riwayat.php', $data);
    }

    public function simpan()
    {
        $model = new RiwayatModel();

        $data = [
            'ID_Pasien' => $this->request->getPost('ID_Pasien'),
            'riwayat_kesehatan' => $this->request->getPost('riwayat_kesehatan'),
            'rekomendasi_gizi' => $this->request->getPost('rekomendasi_gizi'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $model->insert($data);

        // Redirect ke halaman utama tabel-pasien setelah penyimpanan berhasil
        return redirect()->to(base_url('data-riwayat'));
    }

    public function edit($ID_riwayat)
    {
        $model = new RiwayatModel();
        $pasienModel = new PasienModel();

        $riwayat = $model->find($ID_riwayat);
        $pasien = $pasienModel->find($riwayat['ID_Pasien']);

        $data = [
            'riwayat' => $riwayat,
            'namaPasien' => $pasien['Nama'] 
        ];

        helper('form');
        return view('edit_data_riwayat.php', $data);
    }


    public function update()
    {
        $model = new RiwayatModel();

        $data = [
            'riwayat_kesehatan' => $this->request->getPost('riwayat_kesehatan'),
            'rekomendasi_gizi' => $this->request->getPost('rekomendasi_gizi'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $ID_riwayat = $this->request->getPost('ID_riwayat');

        $model->update($ID_riwayat, $data);

        // Redirect ke halaman utama kategori setelah pembaruan berhasil
        return redirect()->to(base_url('data-riwayat'));
    }

    public function delete($ID_riwayat)
    {
        $model = new RiwayatModel();
        $model->delete($ID_riwayat);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-riwayat'));
    }

}