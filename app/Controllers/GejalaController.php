<?php namespace App\Controllers;

use App\Models\GejalaModel;

class GejalaController extends BaseController
{
   

    public function index()
    {
        $model = new GejalaModel();
        $data['gejala'] = $model->findAll();

        return view('tabel_data_gejala.php', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_data_gejala.php');
    }

    public function simpan()
{
    $model = new GejalaModel();

    // Mendapatkan kode gejala baru
    $kodeGejala = $model->getLastKodeGejala();

    $data = [
        'kode_gejala' => $kodeGejala, // Gunakan kode gejala yang baru dihasilkan
        'nama_gejala' => $this->request->getPost('nama_gejala'),
        'nilai' => $this->request->getPost('nilai'),
        'range_min' => $this->request->getPost('range_min'),
        'range_max' => $this->request->getPost('range_max'),
    ];

    $model->insert($data);

    // Redirect ke halaman utama tabel-gejala setelah penyimpanan berhasil
    return redirect()->to(base_url('data-gejala'));
}


    public function edit($id_gejala)
    {
        $model = new GejalaModel();
        $data['gejala'] = $model->find($id_gejala);

        helper('form');
        return view('edit_data_gejala.php', $data);
    }

    public function update()
    {
        $model = new GejalaModel();

        $data = [
            'kode_gejala' =>$this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
            'nilai' => $this->request->getPost('nilai'),
            'range_min' => $this->request->getPost('range_min'),
            'range_max' => $this->request->getPost('range_max'),
        ];

        $id_gejala = $this->request->getPost('kode_gejala');

        $model->update($id_gejala, $data);

        // Redirect ke halaman utama kategori setelah pembaruan berhasil
        return redirect()->to(base_url('data-gejala'));
    }

    public function delete($id_gejala)
    {
        $model = new GejalaModel();
        $model->delete($id_gejala);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-gejala'));
    }

    public function jumlahGejala()
    {
        $model = new GejalaModel();
        $data['jumlahGejala'] = $model->countAll();

        return view('index.php', $data);
    }

    



}
