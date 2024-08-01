<?php
namespace App\Models;

use CodeIgniter\Model;


class PenggunaModel extends Model
{
    protected $table = 'users';
    // protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'username', 'password_hash', 'active'];
    protected $useSoftDeletes = true;
    protected $useTimeStamps = true;

    // public function getUsers(){
    //     return $this->select('email, username, gs.group_id, g.name group_name')
    //     ->join('auth_groups_users gs', 'id=gs.users_id')
    //     ->join('auth_groups g', 'g.id = gs.group_id')
    //     ->findAll();
    // }

    public function getUsers($id = false)
    {
        if($id==false){
            $this->join('auth_groups_users', 'users.id = auth_groups_users.user_id', 'left');
            $this->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id', 'left');
            
            // Sesuaikan select statement untuk menyertakan nama aset dari tabel aset
            return $this->select('users.*, auth_groups_users.group_id, auth_groups.name')->findAll();

        }
        else{
            return $this->where('users.id', $id)->first();
        }
           
    }
    
       
}

