<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'berita_id';
    protected $useTimestamps = true;

    protected $allowedFields = [
    'berita_id',
    'berita_sampul',
    'berita_judul',
    'berita_isi',
    'berita_slug',
    'berita_kategori',
    'berita_subkategori',
    'berita_penulis',
    'berita_tampil',
    'berita_tayang',
    'berita_is_deleted',
    'deteled_at'
    ];

    public function getPaginated($num, $keyword = null, $kategori = null){
        if($kategori != null){
            $this->builder()
            ->select('berita.*, user.nama_asli as nama_user')
            ->where('berita_subkategori', $kategori)
            ->where('berita_tampil', 1)
            ->join('user', 'berita.berita_penulis = user.user_id');
        }else {
            $this->builder()
            ->select('berita.*, user.nama_asli as nama_user')
            ->where('berita_tampil', 1)
            ->join('user', 'berita.berita_penulis = user.user_id');
        }
        
        return[
            'berita' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    public function getAll($limit = null, $berita_kategori = null)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user');
        if($limit){
            $builder->limit($limit);
        }
        if($berita_kategori){
            $builder->where('berita_subkategori', $berita_kategori);
        }
        $builder->where('berita_tampil', 1);
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllByAdmin($whereLevel = null)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user');
        if($whereLevel != null){
            $builder->where('berita_penulis', $whereLevel);
        }
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        $result = $builder->get();
        return $result->getResultArray();
    }
    

    public function getAllBeritaBeasiswa($limit = 4){
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user');
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        $builder->where('berita_subkategori', 1);
        $builder->where('berita_tampil', 1);
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllBeritaPrestasi($limit = 4){
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user');
        $builder->where('berita_subkategori', 3);
        $builder->where('berita_tampil', 1);
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllBeritaOrganisasi($limit = 4){
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user');
        $builder->where('berita_subkategori', 2);
        $builder->where('berita_tampil', 1);
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        if($limit){
            $builder->limit($limit);
        }
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllBeritaPenting($limit = null){
        $builder = $this->db->table('berita');
        $builder->select('*');
        if($limit){
            $builder->limit($limit);
        }
        $builder->limit('4');
        $builder->orderBy('berita_tayang', 'ASC');
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getDetail($slug = null)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user ');
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        $builder->join('subkategori', 'berita.berita_subkategori = subkategori.subkategori_id');
        $builder->where('berita_slug', $slug);
        $result = $builder->get();
        return $result->getRowArray();
    }

    public function getDetailForUser($slug = null) {
        $builderdua = $this->db->table('berita');
        $builderdua->set('berita_tayang', 'berita_tayang+1', FALSE);
        $builderdua->where('berita_slug', $slug);
        $builderdua->update();

        $builder = $this->db->table('berita');
        $builder->select('berita.*, user.nama_asli as nama_user ');
        $builder->join('user', 'berita.berita_penulis = user.user_id');
        $builder->join('subkategori', 'berita.berita_subkategori = subkategori.subkategori_id');
        $builder->where('berita_slug', $slug);
        $result = $builder->get();
        return $result->getRowArray();
    }
    
}