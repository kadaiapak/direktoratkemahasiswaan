<?php

namespace App\Models;

use CodeIgniter\Model;

class UkormawaModel extends Model
{
    protected $table = 'ukormawa';
    protected $primaryKey = 'ukormawa_id';
    protected $useTimestamps = true;

    protected $allowedFields = [
    'ukormawa_id',
    'ukormawa_penulis',
    'ukormawa_judul',
    'ukormawa_deskripsi',
    'ukormawa_slug',
    'ukormawa_ketua',
    'ukormawa_awal_menjabat',
    'ukormawa_akhir_menjabat',
    'ukormawa_kontak',
    'ukormawa_jumlah_anggota',
    'ukormawa_tampil',
    'ukormawa_aktif',
    ];

    public function getAll($limit = null)
    {
        $builder = $this->db->table('ukormawa');
        $builder->select('*');
        $builder->where('ukormawa_tampil', 1);
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllByAdmin($limit = null)
    {
        $builder = $this->db->table('ukormawa');
        $builder->select('*');
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getDetailForEdit($id = null)
    {
        $builder = $this->db->table('ukormawa');
        $builder->select('*');
        $builder->where('ukormawa_id', $id);
        $result = $builder->get();
        return $result->getRowArray();
    }
}