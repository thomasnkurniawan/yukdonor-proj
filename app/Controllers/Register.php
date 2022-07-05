<?php

namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        
        $this->validation = \Config\Services::validation();
        
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        return view('register/register');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        
        //jalankan validasi
        $this->validation->run($data, 'register');
        
        //cek errornya
        $errors = $this->validation->getErrors();
        
        //jika ada error kembalikan ke halaman register
        if($errors){
            session()->setFlashdata('error', $errors);
            return redirect()->to('/register');
        }
        
        //jika tdk ada error 
        
        //buat salt
        $salt = uniqid('', true);
        
        //hash password digabung dengan salt
        $password = md5($data['password']).$salt;
        
        //masukan data ke database
        $this->userModel->save([
            'email' => $data['email'],
            'password' => $password,
            'salt' => $salt,
            'role' => 2
            ]);
        
        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/login');
    }
    


}
