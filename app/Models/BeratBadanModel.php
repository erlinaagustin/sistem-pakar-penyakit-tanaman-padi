<?php namespace App\Models;

use CodeIgniter\Model;

class BeratBadanModel extends Model
{
    protected $table = 'lapor_bb';
    protected $primaryKey = 'ID_lapor';

    // protected $returnType = 'object';
    protected $allowedFields = ['ID_Pasien', 'berat_badan', 'created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; 

    // Method untuk mengambil data berat badan beserta nama pasien
    public function getBeratBadanWithNamaPasien()
    {
        return $this->select('lapor_bb.*, pasien.Nama as NamaPasien')
                    ->join('pasien', 'pasien.ID_Pasien = lapor_bb.ID_Pasien', 'left')
                    ->findAll();
    }

    public function getBeratBadanData()
    {
        return $this->select('berat_badan, created_at')
                    ->orderBy('created_at', 'ASC')
                    ->findAll();
    }

    
}
