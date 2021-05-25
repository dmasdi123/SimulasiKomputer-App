<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'admin';
    protected $useTimestamps = true;
    // protected $username;
    // protected $password;
    protected $allowedFields = ['id_adm', 'username', 'password', 'nama_admin', 'email', 'no_hp'];

    public function getLogin($getusername, $getpassword)
    {
        return $this->db->table('admin')->where(array('username' => $getusername, 'password' => $getpassword))->get()->getRowArray();
        // return $this->select('*')->where('username', $getusername)->orWhere('password', $getpassword)->findAll();
        // return $this->table('admin')->select('*')->where(array('username' => $getusername, 'password' => $getpassword))->get()->findAll();
    }

    public function getRegister()
    {
        $id = $this->selectMax('id_adm')->findAll();
        foreach ($id as $key) {
            $id_admin = $key['id_adm'] + 1;
        }
        return $id_admin;
    }
}
