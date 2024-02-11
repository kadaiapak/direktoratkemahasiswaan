<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    public function hitungPengunjungHariIni()
    {
        $hariIni = date('d');
        $build = $this->db->query(
            "SELECT DAY(kunjungan_nama),
            COUNT(kunjungan_nama) as total_pengunjung
            FROM kunjungan
            GROUP BY DAY(kunjungan_nama)");
        $result = $build->getRowArray();
        return $result;
    }     

    public function totalBerita()
    {
        return $this->db->table('berita')->countAll();
    }
    public function totalAgenda()
    {
        return $this->db->table('agenda')->countAll();
    }
}