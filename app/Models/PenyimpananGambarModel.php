<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyimpananGambarModel extends Model
{
    protected $table = 'penyimpanan_gambar';
    protected $primaryKey = 'gambar_id';
    protected $useTimestamps = true;

    protected $allowedFields = [
    'gambar_nama',
    'deteled_at'
    ];

    public function getAll($limit = null)
    {
        $builder = $this->db->table('penyimpanan_gambar');
        $builder->select('*');
        $result = $builder->get();
        return $result->getResultArray();
    }
}