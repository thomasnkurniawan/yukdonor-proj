<?php

namespace App\Models;

use CodeIgniter\Model;

class PendonorModel extends Model
{
    protected $table = "list_pendonor";
    protected $primaryKey = "id";
    protected $allowedFields = ["nama", "umur", "golongan_darah", "provinsi", "kota", "kecamatan", "alamat", "kontak", "terakhir_donor", 'salt'];
    protected $useTimestamps = false;

    public function pencarian($kunci, $salt) {
        return $this->table('list_pendonor')->where('salt', $salt)->like('kota', $kunci)->findAll();
    }
    
}