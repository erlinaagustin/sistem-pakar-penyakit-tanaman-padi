<?php namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'ID_Pasien';

    protected $allowedFields = ['Nama', 'Nomor_HP', 'Alamat', 'Umur', 'Usia_Kehamilan'];

    protected $useTimestamps = false;


    public function getUsiaKehamilanData()
    {
        return $this->select('Usia_Kehamilan, COUNT(*) as Jumlah')
                    ->groupBy('Usia_Kehamilan')
                    ->orderBy('Usia_Kehamilan', 'ASC')
                    ->findAll();
    }

}
