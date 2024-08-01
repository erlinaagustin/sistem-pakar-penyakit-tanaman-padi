<?php namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table      = 'penyakit';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kode_penyakit','nama_penyakit','penanganan', 'images'];

    protected $useTimestamps = false;

    public function getLastKodePenyakit()
    {
        $lastData = $this->select('kode_penyakit')->orderBy('id', 'DESC')->first();
        if ($lastData) {
            $number = substr($lastData['kode_penyakit'], 1); // Ambil angka setelah 'D'
            return 'D' . str_pad($number + 1, 2, '0', STR_PAD_LEFT); // Increment dan format
        } else {
            return 'D01'; // Default jika tidak ada data
        }
    }

}
