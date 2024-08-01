<?php namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'id_gejala';

    // protected $returnType = 'object';
    protected $allowedFields = ['kode_gejala','nama_gejala', 'nilai', 'range_min', 'range_max'];

    protected $useTimestamps = false;

    public function getLastKodeGejala()
    {
        $lastData = $this->select('kode_gejala')->orderBy('id_gejala', 'DESC')->first();
        if ($lastData) {
            $number = substr($lastData['kode_gejala'], 1); // Ambil angka setelah 'G'
            $incrementedNumber = intval($number) + 1; // Konversi ke integer dan increment
            return 'G' . str_pad($incrementedNumber, 3, '0', STR_PAD_LEFT); // Format dengan padding
        } else {
            return 'G001'; // Default jika tidak ada data
        }
    }
    

    
    
}
