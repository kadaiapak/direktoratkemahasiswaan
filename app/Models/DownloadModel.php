<?php

namespace App\Models;

use CodeIgniter\Model;

class DownloadModel extends Model
{
    protected $table = 'download';
    protected $primaryKey = 'download_id';
    protected $useTimestamps = true;

    protected $allowedFields = [
    'download_penulis',
    'download_judul',
    'download_slug',
    'download_file',
    'download_tampil',
    'download_jumlah',
    ];

    public function getPaginated($num, $keyword = null, $kategori = null){
        
            $this->builder()
            ->select('download.*, user.nama_asli as nama_user')
            ->where('download_tampil', 1)
            ->join('user', 'download.download_penulis = user.user_id');

            return[
            'download' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    public function getAll($limit = null, $download_kategori = null)
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, user.nama_asli as nama_user');
        if($limit){
            $builder->limit($limit);
        }
        if($download_kategori){
            $builder->where('download_subkategori', $download_kategori);
        }
        $builder->where('download_tampil', 1);
        $builder->join('user', 'download.download_penulis = user.user_id');
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getAllByAdmin($whereLevel = null)
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, user.nama_asli as nama_user');
        if($whereLevel != null){
            $builder->where('download_penulis', $whereLevel);
        }
        $builder->join('user', 'download.download_penulis = user.user_id');
        $result = $builder->get();
        return $result->getResultArray();
    }
    

    // public function getAllBeritaBeasiswa($limit = 4){
    //     $builder = $this->db->table('download');
    //     $builder->select('download.*, user.nama_asli as nama_user');
    //     $builder->join('user', 'download.download_penulis = user.user_id');
    //     $builder->where('download_subkategori', 1);
    //     $builder->where('download_tampil', 1);
    //     if($limit){
    //         $builder->limit($limit);
    //     }
    //     $result = $builder->get();
    //     return $result->getResultArray();
    // }

    // public function getAllBeritaPrestasi($limit = 4){
    //     $builder = $this->db->table('download');
    //     $builder->select('download.*, user.nama_asli as nama_user');
    //     $builder->where('download_subkategori', 3);
    //     $builder->where('download_tampil', 1);
    //     $builder->join('user', 'download.download_penulis = user.user_id');
    //     if($limit){
    //         $builder->limit($limit);
    //     }
    //     $result = $builder->get();
    //     return $result->getResultArray();
    // }

    // public function getAllBeritaOrganisasi($limit = 4){
    //     $builder = $this->db->table('download');
    //     $builder->select('download.*, user.nama_asli as nama_user');
    //     $builder->where('download_subkategori', 2);
    //     $builder->where('download_tampil', 1);
    //     $builder->join('user', 'download.download_penulis = user.user_id');
    //     if($limit){
    //         $builder->limit($limit);
    //     }
    //     $result = $builder->get();
    //     return $result->getResultArray();
    // }

    public function getAllDownloadPenting($limit = null){
        $builder = $this->db->table('download');
        $builder->select('*');
        if($limit){
            $builder->limit($limit);
        }
        $builder->limit('4');
        $builder->orderBy('download_jumlah', 'ASC');
        $result = $builder->get();
        return $result->getResultArray();
    }

    public function getDetailForEdit($id = null)
    {
        $builder = $this->db->table('download');
        $builder->select('download.*, user.nama_asli as nama_user ');
        $builder->join('user', 'download.download_penulis = user.user_id');
        $builder->where('download_id', $id);
        $result = $builder->get();
        return $result->getRowArray();
    }

    public function aksiDownload($namafile)
    {
        $builder = $this->db->table('download');
        $builder->select('*');
        $builder->where('download_file', $namafile);
        $result = $builder->get();
        return $result->getRowArray();
    }

    public function penjumlahanTotalDownload($nama_file)
    {
        $builder = $this->db->table('download');
        $builder->set('download_jumlah', 'download_jumlah+1', FALSE);
        $builder->where('download_file', $nama_file);
        $builder->update();
    }
}