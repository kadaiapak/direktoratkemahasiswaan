<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'agenda_id';
    protected $useTimestamps = true;

    protected $allowedFields = [
    'agenda_id',
    'agenda_penulis',
    'tanggal',
    'judul',
    'agenda_slug',
    'tampil',
    'jumlah_lihat',
    ];

    public function getAll($limit = null)
    {
        $builder = $this->db->table('agenda');
        $builder->select('*');
        $builder->where('tampil', 1);
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllByAdmin($limit = null)
    {
        $builder = $this->db->table('agenda');
        $builder->select('agenda.*, user.nama_asli as nama_user ');
        $builder->join('user', 'agenda.agenda_penulis = user.user_id');
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getDetailForEdit($id = null)
    {
        $builder = $this->db->table('agenda');
        $builder->select('agenda.*, user.nama_asli as nama_user ');
        $builder->join('user', 'agenda.agenda_penulis = user.user_id');
        $builder->where('agenda_id', $id);
        $result = $builder->get();
        return $result->getRowArray();
    }
}