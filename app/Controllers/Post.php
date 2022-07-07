<?php

namespace App\Controllers;
use App\Models\PendonorModel;
use App\Models\UrgentModel;


class Post extends BaseController
{

    public function __construct()
    {
        $this->session = session();
        $this->pendonorModel = new PendonorModel();
        $this->urgentModel = new UrgentModel();

    }

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

        $data['pendonors'] = $this->pendonorModel->where('salt', $this->session->get('salt'))->findAll();
        $data['urgents'] = $this->urgentModel->where('salt', $this->session->get('salt'))->findAll();


        return view('post/post', $data);
    }

    public function view_edit($type, $id) 
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

        if ($type == 'pendonor') {
            $pendonorList = $this->pendonorModel->find($id);
            if (empty($pendonorList)) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
            }

            $data['pendonor'] = $pendonorList;
            return view('post/form-edit-post-pendonor', $data);

        }

        $urgentList = $this->urgentModel->find($id);
        if (empty($urgentList)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }

        $data['urgent'] = $urgentList;

        return view('post/form-edit-post-urgent', $data);
    }

    public function update($type, $id) 
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/login');
        }

        if ($type == 'pendonor') {
            $dataPendonorUpdate = $this->request->getPost();
            print_r($dataPendonorUpdate);

            $this->pendonorModel->update($id, [
                "nama" => $dataPendonorUpdate['nama'],
                "umur" => $dataPendonorUpdate['umur'],
                "golongan_darah" => $dataPendonorUpdate['golongan_darah'],
                "provinsi" => $dataPendonorUpdate['provinsi'],
                "kota" => $dataPendonorUpdate['kota'],
                "kecamatan" => $dataPendonorUpdate['kecamatan'],
                "alamat" => $dataPendonorUpdate['alamat'],
                "kontak" => $dataPendonorUpdate['kontak'],
                'salt' => $this->session->get('salt'),
                "terakhir_donor" => $dataPendonorUpdate['terakhir_donor']
            ]);
            session()->setFlashdata('message', 'Update Data Berhasil');
            return redirect()->to('/post');

        }

        $urgentUpdate = $this->request->getPost();

        $this->urgentModel->update($id, [
            "nama" => $urgentUpdate['nama'],
            "golongan_darah" => $urgentUpdate['golongan_darah'],
            "provinsi" => $urgentUpdate['provinsi'],
            "kota" => $urgentUpdate['kota'],
            "rumah_sakit" => $urgentUpdate['rumah_sakit'],
            "narahubung" => $urgentUpdate['narahubung'],
            "kontak" => $urgentUpdate['kontak'],
            'salt' => $this->session->get('salt'),
        ]);
        session()->setFlashdata('message', 'Update Data Berhasil');
        return redirect()->to('/post');
    }

    public function delete_urgent($id) 
    {
        $urgentList = $this->urgentModel->find($id);
        if (empty($urgentList)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }

        $this->urgentModel->delete($id);
        $this->session->setFlashdata('message', 'Delete Data Berhasil');
        return redirect()->to('/post');
    }

    public function delete_pendonor($id) 
    {
        $pendonorList = $this->pendonorModel->find($id);
        if (empty($pendonorList)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }

        $this->pendonorModel->delete($id);
        $this->session->setFlashdata('message', 'Delete Data Berhasil');
        return redirect()->to('/post');
    }


    public function search()
    {
         //tangkap data dari form 
        $key = $this->request->getVar('keyword');
        if ($key) {
            $data['pendonors'] = $this->pendonorModel->pencarian($key, $this->session->get('salt'));
            $data['urgents'] = $this->urgentModel->pencarian($key, $this->session->get('salt'));
        } else {
            $data['urgents'] = $this->urgentModel->where('salt', $this->session->get('salt'))->findAll();
            $data['pendonors'] = $this->pendonorModel->where('salt', $this->session->get('salt'))->findAll();
        }
        if (count($data['pendonors']) == 0 && count($data['urgents']) == 0) {

            session()->setFlashdata('notfound', 'Pencarian tidak ditemukan :(');
        } else {    
            session()->setFlashdata('notfound', '');
        }

        return view('post/post', $data);
    }
}
