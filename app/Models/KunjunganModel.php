<?php

namespace App\Models;

use CodeIgniter\Model;

class KunjunganModel extends Model
{
    protected $table = 'kunjungan';
    protected $primaryKey = 'kunjungan_id';

    protected $allowedFields = [
    'kunjungan_id',
    'kunjungan_nama',
    'created_at'
    ];

    public function counter()
    {

    }
}