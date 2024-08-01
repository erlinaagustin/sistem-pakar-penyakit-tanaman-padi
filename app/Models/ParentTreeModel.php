<?php namespace App\Models;

use CodeIgniter\Model;

class ParentTreeModel extends Model
{
    protected $table = 'parentTree';
    protected $primaryKey = 'id';

    // protected $returnType = 'object';
    protected $allowedFields = ['gambar'];

    protected $useTimestamps = false;


    

    
    
}
