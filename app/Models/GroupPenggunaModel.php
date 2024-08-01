<?php

// app/Models/GroupPenggunaModel.php
namespace App\Models;

use CodeIgniter\Model;

class GroupPenggunaModel extends Model
{
    protected $table = 'auth_groups_users';
    protected $primaryKey = ['group_id', 'user_id'];
    protected $allowedFields = ['group_id', 'user_id'];
    
}
