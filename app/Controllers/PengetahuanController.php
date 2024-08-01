<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PengetahuanModel;
use App\Models\PenyakitModel;
use App\Models\GejalaModel;

class PengetahuanController extends BaseController
{
    public function index()
    {
        $model = new PengetahuanModel();
        $data['pengetahuan'] = $model->findAll();

        return view('tabel_pengetahuan', $data);
    }

    public function tambah()
    {
    $penyakitModel = new PenyakitModel();
    $penyakit = $penyakitModel->findAll();

    $gejalaModel = new GejalaModel();
    $gejala = $gejalaModel->findAll();
    
        helper('form');
        return view('tambah_data_pengetahuan', ['penyakit' => $penyakit, 'gejala' => $gejala]);
        
    }

    public function simpan()
    {
        helper(['form', 'url']);
        $gejalaModel = new GejalaModel();
    
        $gejalaDipilih = $this->request->getVar('gejala');
        $penyakit = $this->request->getVar('penyakit');
    
        // Logika untuk membangun string rule dari input
        $rules = "IF ";
        $totalNilaiFuzzy = 0;
    
        foreach ($gejalaDipilih as $index => $id_gejala) {
            // Ambil nilai fuzzy untuk gejala ini dari database
            $gejala = $gejalaModel->find($id_gejala);
            $totalNilaiFuzzy += $gejala['nilai']; // Menggunakan kolom nilai sebagai pengganti bobot-nilai
    
            // Menambahkan gejala ke dalam rules
            $rules .= "G" . str_pad($id_gejala, 3, '0', STR_PAD_LEFT); // Menyesuaikan format
    
            // Jika ini bukan item terakhir, tambahkan operator
            if ($index < count($gejalaDipilih) - 1) {
                $rules .= " AND ";
            }
        }
    
        // Menambahkan bagian THEN dari rules
        $rules .= " THEN " . str_pad($penyakit, 3, '0', STR_PAD_LEFT); // Menyesuaikan format
    
        // Hitung rata-rata nilai fuzzy
        $nilaiAgregasiFuzzy = $totalNilaiFuzzy / count($gejalaDipilih);
    
        // Hitung nilai defuzzyfikasi dalam persentase
        $defuzzyfikasiPersen = $nilaiAgregasiFuzzy * 100;
    
        // Menentukan kategori berdasarkan nilai defuzzyfikasi dalam persen
        if ($defuzzyfikasiPersen >= 25 && $defuzzyfikasiPersen <= 50) {
            $kategori = 'Ringan';
        } elseif ($defuzzyfikasiPersen > 50 && $defuzzyfikasiPersen <= 75) {
            $kategori = 'Berat';
        } elseif ($defuzzyfikasiPersen > 75) {
            $kategori = 'Puso';
        } else {
            $kategori = 'Tidak diketahui';
        }
    
        $model = new PengetahuanModel();
    
        $data = [
            'rules' => $rules,
            'defuzzyfikasi' => $defuzzyfikasiPersen, // Menyimpan nilai defuzzyfikasi dalam persen
            'kategori' => $kategori // Menyimpan kategori ke dalam kolom kategori
        ];
    
        $model->insert($data);
    
        // Redirect ke halaman utama data pengetahuan setelah penyimpanan berhasil
        return redirect()->to(base_url('data-pengetahuan'));
    }
    
    

    


    public function edit($id_pengetahuan)
{
    $model = new PengetahuanModel();
    $data['pengetahuan'] = $model->find($id_pengetahuan);

    $penyakitModel = new PenyakitModel();
    $data['penyakit'] = $penyakitModel->findAll();

    $gejalaModel = new GejalaModel();
    $data['gejala'] = $gejalaModel->findAll();
    
    helper('form');
    return view('edit_data_pengetahuan', $data);
}


public function update($id_pengetahuan)
{
    helper(['form', 'url']);
    $pengetahuanModel = new PengetahuanModel();
    $gejalaModel = new GejalaModel();

    // Mengambil rules baru dari form
    $rulesBaru = $this->request->getVar('rules');

    // Mengurai rules untuk mendapatkan ID gejala dan penyakit dari rules baru
    preg_match_all('/G(\d{3})/', $rulesBaru, $matchesGejala);
    preg_match('/THEN D(\d{2})/', $rulesBaru, $matchesPenyakit);
    $gejalaIds = $matchesGejala[1]; // ID gejala dalam array
    // $penyakitId = $matchesPenyakit[1]; // ID penyakit, jika Anda memerlukan ini nantinya

    $totalNilaiFuzzy = 0;
    foreach ($gejalaIds as $id_gejala) {
        // Asumsi Anda memiliki kolom 'kode_gejala' di tabel Gejala dan format kode gejala adalah GXXX
        $gejala = $gejalaModel->where('kode_gejala', 'G' . str_pad($id_gejala, 3, '0', STR_PAD_LEFT))->first();
        
        if ($gejala) {
            $totalNilaiFuzzy += $gejala['nilai'];
        }
    }

    $nilaiAgregasiFuzzy = count($gejalaIds) > 0 ? $totalNilaiFuzzy / count($gejalaIds) : 0;
    $defuzzyfikasiPersen = $nilaiAgregasiFuzzy * 100;

    // Kategorisasi berdasarkan nilai defuzzyfikasi
    $kategori = $this->tentukanKategori($defuzzyfikasiPersen);

    $dataUpdate = [
        'rules' => $rulesBaru, // Menyimpan rules baru
        'defuzzyfikasi' => $defuzzyfikasiPersen,
        'kategori' => $kategori
    ];

    $pengetahuanModel->update($id_pengetahuan, $dataUpdate);

    return redirect()->to(base_url('data-pengetahuan'));
}

private function tentukanKategori($defuzzyfikasiPersen) {
    if ($defuzzyfikasiPersen >= 25 && $defuzzyfikasiPersen <= 50) {
        return 'Ringan';
    } elseif ($defuzzyfikasiPersen > 50 && $defuzzyfikasiPersen <= 75) {
        return 'Berat';
    } elseif ($defuzzyfikasiPersen > 75) {
        return 'Puso';
    } else {
        return 'Tidak diketahui';
    }
}



    public function delete($id_pengetahuan)
    {
        $model = new PengetahuanModel();
        $model->delete($id_pengetahuan);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-pengetahuan'));
    }


    
}