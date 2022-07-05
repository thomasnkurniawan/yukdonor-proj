<?php

namespace App\Models;

use CodeIgniter\Model;

class UrgentModel extends Model
{
    protected $table = "list_urgent";
    protected $primaryKey = "id";
    protected $allowedFields = ["nama", "golongan_darah", "provinsi", "kota", "rumah_sakit", "narahubung", "kontak", 'salt'];
    protected $useTimestamps = false;
    
}