<?php

namespace App\Controllers;
use App\Models\UrgentModel;


class Urgent extends BaseController
{

    public function __construct()
    {
        $this->session = session();
        $this->urgentModel = new UrgentModel();
    }

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

        $data['list'] = $this->urgentModel->where('salt', $this->session->get('salt'))->findAll();

        return view('urgent/list-urgent', $data);
    }

    public function form()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

     

        return view('urgent/form-urgent');
    }

    public function save()
    {
         //tangkap data dari form 
        $data = $this->request->getPost();

         //masukan data ke database
         $this->urgentModel->save([
            "nama" => $data['nama'],
            "golongan_darah" => $data['golongan_darah'],
            "provinsi" => $data['provinsi'],
            "kota" => $data['kota'],
            "rumah_sakit" => $data['rumah_sakit'],
            "narahubung" => $data['narahubung'],
            "kontak" => $data['kontak'],
            'salt' => $this->session->get('salt'),
        ]);
        
            //arahkan ke halaman login
        session()->setFlashdata('urgent', 'Anda berhasil mendaftarkan pendonor!');
        return redirect()->to('/urgent/list');
    }


    public function search()
    {
         //tangkap data dari form 
        $key = $this->request->getVar('keyword');
        if ($key) {
            $data['list'] = $this->urgentModel->pencarian($key, $this->session->get('salt'));
        } else {
            $data['list'] = $this->urgentModel->where('salt', $this->session->get('salt'))->findAll();
        }
        if (count($data['list']) == 0) {

            session()->setFlashdata('notfound', 'Pencarian tidak ditemukan :(');
        } else {    
            session()->setFlashdata('notfound', '');
        }

        return view('urgent/list-urgent', $data);
    }
}
