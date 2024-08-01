<?php namespace App\Models;

use CodeIgniter\Model;

class PengetahuanModel extends Model
{
    protected $table = 'pengetahuan';
    protected $primaryKey = 'id_pengetahuan';

    // protected $returnType = 'object';
    protected $allowedFields = ['id_pengetahuan', 'rules','defuzzyfikasi', 'kategori'];

    protected $useTimestamps = false;


    

    
    
}
