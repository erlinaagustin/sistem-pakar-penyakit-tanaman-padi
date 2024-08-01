<?php namespace App\Controllers;

use App\Models\PasienModel;

class PasienController extends BaseController
{
    // public function index()
    // {
    //     $model = new PasienModel();
    //     $data['pasien'] = $model->findAll();

    //     return view('tabel_data_pasien.php', $data);
    // }

    public function tabel_data_pasien()
    {
        $model = new PasienModel();
        $data['pasien'] = $model->findAll();

        return view('tabel_data_pasien.php', $data);
    }

    public function tabel_data_pasien_admin()
    {
        $model = new PasienModel();
        $data['pasien'] = $model->findAll();

        return view('tabel_data_pasien_admin.php', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_data_pasien.php');
    }

    public function simpan()
    {
        $model = new PasienModel();

        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Nomor_HP' => $this->request->getPost('Nomor_HP'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Umur' => $this->request->getPost('Umur'),
            'Usia_Kehamilan' => $this->request->getPost('Usia_Kehamilan')
        ];

        $model->insert($data);

        // Redirect ke halaman utama tabel-pasien setelah penyimpanan berhasil
        return redirect()->to(base_url('data-pasien-admin'));
    }

    public function edit($ID_Pasien)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->find($ID_Pasien);

        helper('form');
        return view('edit_data_pasien.php', $data);
    }

    public function update()
    {
        $model = new PasienModel();

        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Nomor_HP' => $this->request->getPost('Nomor_HP'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Umur' => $this->request->getPost('Umur'),
            'Usia_Kehamilan' => $this->request->getPost('Usia_Kehamilan')
        ];

        $ID_Pasien = $this->request->getPost('ID_Pasien');

        $model->update($ID_Pasien, $data);

        // Redirect ke halaman utama kategori setelah pembaruan berhasil
        return redirect()->to(base_url('data-pasien-admin'));
    }

    public function delete($ID_Pasien)
    {
        $model = new PasienModel();
        $model->delete($ID_Pasien);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-pasien-admin'));
    }

    public function jumlahPasien()
    {
        $model = new PasienModel();
        $data['jumlahPasien'] = $model->countAll();

        return view('index.php', $data);
    }



}
