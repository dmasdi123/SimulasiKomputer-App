<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Database\Query;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;
use Config\Exceptions;
use Config\Validation;
use Exception;
use App\Models\MasterBarangModel;
use App\Models\Simulasi;

class Auth extends BaseController
{
    protected $userModel;


    public function __construct()
    {
        $this->userModel = new \App\Models\userModel();
    }


    public function login()
    {

        $getusername = $this->request->getVar('username');
        $getpassword = $this->request->getVar('password');

        $cek = $this->userModel->getLogin($getusername, $getpassword);

        if (($cek['username'] == $getusername) && ($cek['password'] == $getpassword)) {

            session()->set('id_adm', $cek['id_adm']);
            session()->set('nama_admin', $cek['nama_admin']);
            session()->set('email', $cek['email']);
            session()->set('no_hp', $cek['no_hp']);
            return redirect()->to('/dashboard');
        } elseif (($cek['username'] !== $getusername) && ($cek['password'] !== $getpassword)) {
            session()->setFlashData('pesan', 'Username or Password Invalid');
            return redirect()->to('/simulasi');
        }
    }


    public function register()
    {
        $data = [
            'title' => 'Register Form',
            'autoidadmin' => $this->userModel->getRegister()
        ];
        return view('/dashboard/register', $data);
    }


    public function tambahadmin()
    {
        $this->masterBarangPembelian->save([
            'id_adm' => $this->userModel->getregister(),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),

        ]);
        session()->setFlashData('pesan', 'Berhasil Menambahkan Admin');

        return redirect()->to('/dashboard/penjualan');
    }


    public function logout()
    {
        $session = \Config\Services::session();
        $session->stop();
        $session->destroy();

        return redirect()->to('/simulasi');
    }
}
