<?php

namespace App\Controllers;
use App\Models\PenyakitModel;
use App\Models\GejalaModel;
 

class DashboardController extends BaseController
{
    public function index(): string
    {
        $penyakitModel = new PenyakitModel();
        $gejalaModel = new GejalaModel();
      

        $data = [
            'jumlahGejala' => $gejalaModel->countAll(),
            'jumlahPenyakit' => $penyakitModel->countAll(),
            
        ];

        return view('index', $data);
    }
}
