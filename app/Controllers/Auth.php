<?php

namespace App\Controllers;
use App\Models\AuthModel;


class Auth extends BaseController
{
    protected $authModel;
    public function __construct()
    {
        helper('form');
        $this->authModel = new AuthModel();
    }
    public function index()
    {
        return redirect()->to(site_url('/auth/login'));
    }

    public function login()
    {
        if(session('log')) {
            return redirect()->to(base_url('/dashboard'));
        }
        $data = [
            'judul' => 'Login Ditmawa',
        ];
        return view('auth/v_login', $data);
    }

    public function loginProcess()
    {
        if(!$this->validate([
            'username' => [
                'rules' => 'required|alpha_numeric',
                'errors' => [
                    'required' => 'username tidak boleh kosong',
                    'alpha_numeric' => 'Username hanya huruf dan angka tanpa spasi dan spesial karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|cek_spasi',
                'errors' => [
                    'required' => 'password tidak boleh kosong',
                    'cek_spasi' => 'Password tidak boleh ada spasi'
                ]
            ]
        ])){
            return redirect()->back()->withInput();
        }
        $username = $this->request->getVar('username');
        $cek = $this->authModel->login($username);
        if($cek){
            $password = $this->request->getVar('password');
            if(password_verify($password, $cek['password'])){
                session()->set('user_id', $cek['user_id']);
                session()->set('log', true);
                session()->set('nama_asli', $cek['nama_asli']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                session()->set('user_foto', $cek['user_foto']);
                session()->set('user_level_nama', $cek['user_level_nama']);
                // ubah status menjadi online
                $builder = $this->db->table('user');
                $builder->set('is_login', '1');
                $builder->where('username', $cek['username']);
                $builder->update();
                return redirect()->to('/dashboard')->with('sukses','Login berhasil!');
            }else {
                return redirect()->back()->with('gagal', 'Username atau Password salah!');   
            }
        }
        
    }

    public function logout()
    {
        date_default_timezone_set('ASIA/JAKARTA');
        $terakhir_login = date('Y-m-d H:i:s');
        $username = session()->get('username');
        $builder = $this->db->table('user');
        $builder->set('is_login', '0');
        $builder->set('terakhir_login', $terakhir_login);
        $builder->where('username', $username);
        $builder->update();
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
