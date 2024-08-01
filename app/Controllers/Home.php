<?php namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\PengetahuanModel;
use App\Models\PenyakitModel;
use CodeIgniter\Controller;

// class Home extends BaseController
// {
//     public function index()
//     {
//         $model = new GejalaModel();
//         $data['gejala'] = $model->findAll(); // Mengambil semua data gejala
        
//         return view('landing_page', $data); // Meneruskan data ke view
//     }
//     public function diagnosa()
//     {
//         helper(['form', 'url']);
//         $gejalaModel = new GejalaModel();
//         $pengetahuanModel = new PengetahuanModel();
//         $penyakitModel = new PenyakitModel(); // Model untuk detail penyakit
    
//         // Siapkan variabel data dan sertakan daftar gejala untuk form
//         $data['gejala'] = $gejalaModel->findAll();
    
//         // Ambil input gejala dari form jika ada
//         $gejalaDipilih = $this->request->getPost('gejala');
        
//         if ($gejalaDipilih) {
//             $totalNilaiFuzzy = 0;
    
//             // Hitung total nilai fuzzy dari gejala yang dipilih
//             foreach ($gejalaDipilih as $id_gejala) {
//                 $gejala = $gejalaModel->find($id_gejala);
//                 if($gejala) {
//                     $totalNilaiFuzzy += $gejala['nilai'];
//                 }
//             }
    
//             $nilaiAgregasiFuzzy = count($gejalaDipilih) > 0 ? $totalNilaiFuzzy / count($gejalaDipilih) : 0;
//             $defuzzyfikasiPersen = $nilaiAgregasiFuzzy * 100;
    
//             // Cari penyakit dengan nilai defuzzyfikasi terdekat
//             $pengetahuanTerdekat = $pengetahuanModel->orderBy("abs(defuzzyfikasi - $defuzzyfikasiPersen)", 'asc')->first();
    
//             if ($pengetahuanTerdekat && preg_match('/THEN (D\d{2})/', $pengetahuanTerdekat['rules'], $matches)) {
//                 $kodePenyakit = $matches[1];
    
//                 // Ambil detail penyakit berdasarkan kode
//                 $penyakit = $penyakitModel->where('kode_penyakit', $kodePenyakit)->first();
    
//                 if ($penyakit) {
//                     // Tambahkan hasil diagnosa ke dalam variabel $data
//                     $data['hasilDiagnosa'] = [
//                         'nama' => $penyakit['nama_penyakit'],
//                         'gambar' => $penyakit['images'],
//                         'penanganan' => $penyakit['penanganan'],
//                         'persentaseKemiripan' => 100 - abs($pengetahuanTerdekat['defuzzyfikasi'] - $defuzzyfikasiPersen)
//                     ];
//                 } else {
//                     // Penyakit tidak ditemukan
//                     $data['hasilDiagnosa'] = 'Maaf, kami tidak dapat menemukan penyakit yang cocok dengan gejala yang Anda masukkan.';
//                 }
//             } else {
//                 // Format rules tidak valid atau penyakit tidak ditemukan dalam rules
//                 $data['hasilDiagnosa'] = 'Format rules tidak valid atau penyakit tidak ditemukan.';
//             }
//         }
    
//         // Tampilkan view dengan semua data yang diperlukan
//         return view('landing_page', $data);
//     }
    

    
// }







class Home extends BaseController
{
    public function index()
    {
        $model = new GejalaModel();
        $data['gejala'] = $model->findAll(); // Mengambil semua data gejala
        
        return view('landing_page', $data); // Meneruskan data ke view
    }

    public function diagnosa()
    {
        helper(['form', 'url']);
        $gejalaModel = new GejalaModel();
        $pengetahuanModel = new PengetahuanModel();
        $penyakitModel = new PenyakitModel();
    
        $gejalaInput = $this->request->getPost('gejala');
        
        // Pastikan ada gejala yang dipilih
        if (!$gejalaInput) {
            // Jika tidak ada gejala yang dipilih, kembalikan pengguna dengan pesan error
            return redirect()->to('/')->with('error', 'Tidak ada gejala yang dipilih.');
        }
    
        $totalNilaiFuzzy = 0;
        foreach ($gejalaInput as $id_gejala) {
            $gejala = $gejalaModel->find($id_gejala);
            if ($gejala) {
                $totalNilaiFuzzy += $gejala['nilai'];
            }
        }
        
        $rataRataFS = count($gejalaInput) > 0 ? $totalNilaiFuzzy / count($gejalaInput) : 0;
        $defuzzyfikasiPersen = $rataRataFS * 100;
    
        // Temukan entry pengetahuan dengan nilai defuzzyfikasi terdekat dengan perhitungan
        $pengetahuanTerdekat = $pengetahuanModel->orderBy("abs(defuzzyfikasi - $defuzzyfikasiPersen)", 'asc')->first();
    
        if ($pengetahuanTerdekat) {
            if (preg_match('/THEN (D\d+)/', $pengetahuanTerdekat['rules'], $matches)) {
                $kodePenyakit = $matches[1];
    
                // Dapatkan detail penyakit berdasarkan kode penyakit
                $penyakit = $penyakitModel->where('kode_penyakit', $kodePenyakit)->first();
    
                if ($penyakit) {
                    $hasilDiagnosa = "Penyakit yang diderita adalah " . $penyakit['nama_penyakit'] . 
                                     " dengan kemiripan " . round(100 - abs($pengetahuanTerdekat['defuzzyfikasi'] - $defuzzyfikasiPersen), 2) . "%." .
                                     "<br>Penanganan: " . $penyakit['penanganan'] .
                                     "<br><img src='" . base_url('uploads/' . $penyakit['images']) . "' alt='Gambar Penyakit' style='max-width: 50%; height: auto;'>";
                } else {
                    $hasilDiagnosa = "Penyakit tidak ditemukan.";
                }
            } else {
                $hasilDiagnosa = "Format rules tidak valid atau penyakit tidak ditemukan.";
            }
        } else {
            $hasilDiagnosa = "Tidak ada diagnosa yang cocok.";
        }
    
        // Simpan hasil diagnosa ke session untuk ditampilkan
        session()->setFlashdata('diagnosa', $hasilDiagnosa);
    
        // Kembalikan pengguna ke halaman utama dengan hasil diagnosa
        return redirect()->to('/#symptoms');
    }
    
    
}
