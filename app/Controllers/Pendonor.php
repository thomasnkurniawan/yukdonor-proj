<?php

namespace App\Controllers;
use App\Models\PendonorModel;


class Pendonor extends BaseController
{

    public function __construct()
    {
        $this->session = session();
        $this->pendonorModel = new PendonorModel();
    }

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

        $data['list'] = $this->pendonorModel->where('salt', $this->session->get('salt'))->findAll();

        return view('pendonor/list-pendonor', $data);
    }

    public function form()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

     

        return view('pendonor/form-pendonor');
    }

    public function save()
    {
         //tangkap data dari form 
        $data = $this->request->getPost();

         //masukan data ke database
         $this->pendonorModel->save([
            "nama" => $data['nama'],
            "umur" => $data['umur'],
            "golongan_darah" => $data['golongan_darah'],
            "provinsi" => $data['provinsi'],
            "kota" => $data['kota'],
            "kecamatan" => $data['kecamatan'],
            "alamat" => $data['alamat'],
            "kontak" => $data['kontak'],
            'salt' => $this->session->get('salt'),
            "terakhir_donor" => $data['terakhir_donor']
        ]);
        
            //arahkan ke halaman login
        session()->setFlashdata('pendonor', 'Anda berhasil mendaftarkan pendonor!');
        return redirect()->to('/pendonor/list');
    }
}
