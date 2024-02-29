<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;

class Home extends BaseController
{
    public function index()
    {
        echo view('login');
    }
 
    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');

        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {
            $peminjam=$model->getarray('peminjam', $where);

                if ($guru) { 
                session()->set('id', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('nama_peminjam', $peminjam['nama_guru']);
                session()->set('level', $cek['level']);
               

                return redirect()->to('/home/dashboard');
            } else {
                $where = array('id_user_siswa' => $cek['id_user']);
                $siswa = $model->getarray('siswa', $where);

                if ($siswa) { 
                    session()->set('id', $cek['id_user']);
                    session()->set('username', $cek['username']);
                    session()->set('nama_siswa', $siswa['nama_siswa']);
                    session()->set('id_siswa', $siswa['id_siswa']);
                    session()->set('level', $cek['level']);

                    return redirect()->to('/home/dashboard');
                }
            }
        }
        return redirect()->to('/');
    }

    public function log_out()
    {
        $model = new M_model(); 
        session()->destroy();

        return redirect()->to('/');
    }
}
