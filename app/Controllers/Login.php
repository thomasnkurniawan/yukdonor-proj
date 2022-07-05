<?php

namespace App\Controllers;
use App\Models\UserModel;


class Login extends BaseController
{

    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        return view('login/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        
        //ambil data user di database yang emailnya sama 
        $user = $this->userModel->where('email', $data['email'])->first();
        
        //cek apakah email ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != md5($data['password']).$user['salt']){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            }
            else{
                //jika benar, arahkan user masuk ke home 
                $sessLogin = [
                    'isLogin' => true,
                    'salt' => $user['salt'],
                    'email' => $user['email'],
                    'role' => $user['role']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('/');
            }
        }
        else{
            //jika email tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('email', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }
}
