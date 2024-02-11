<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\AgendaModel;
use App\Models\UkormawaModel;
use App\Models\KunjunganModel;
class Home extends BaseController
{
    protected $beritaModel;
    protected $agendaModel;
    protected $ukormawaModel;
    protected $kunjunganModel;
    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->agendaModel = new AgendaModel();
        $this->ukormawaModel = new UkormawaModel();
        $this->kunjunganModel = new KunjunganModel();
    }
    public function index()
    {
        $tanggal_diproses_admin = date('Y-m-d H:i:s');
        $data = [
            'kunjungan_nama' => $tanggal_diproses_admin
        ];
        $this->kunjunganModel->insert($data);
        $homeBerita = $this->beritaModel->getAll($limit = 4);
        $beasiswaBerita = $this->beritaModel->getAllBeritaBeasiswa($limit = 4);
        $prestasiBerita = $this->beritaModel->getAllBeritaPrestasi($limit = 4);
        $organisasiBerita = $this->beritaModel->getAllBeritaOrganisasi($limit = 4);
        $semuaAgenda = $this->agendaModel->getAll($limit = 4);
        $data = [
            'judul' => 'Home',
            'home_berita' => $homeBerita,
            'beasiswa_berita' => $beasiswaBerita,
            'prestasi_berita' => $prestasiBerita,
            'organisasi_berita' => $organisasiBerita,
            'semua_agenda' => $semuaAgenda
        ];
        return view('home/v_home', $data);
    }

    public function profilDitmawa()
    {
        $data = [
            'judul' => 'Profil Direktorat Kemahasiswaan',
        ];

        return view('home/v_profil_ditmawa', $data);
    }

    public function strukturOrganisasi()
    {
        $data = [
            'judul' => 'Struktur Organisasi',
        ];

        return view('home/v_struktur_organisasi', $data);
    }

    public function unitKegiatan()
    {
        $semuaUnit = $this->ukormawaModel->getAll();
        $data = [
            'judul' => 'Unit Kegiatan',
            'semuaUnit' => $semuaUnit,
        ];

        return view('home/v_unit_kegiatan', $data);
    }

    public function semuaPrestasi()
    {
        $data = [
            'judul' => 'Daftar Prestasi',
        ];

        return view('home/v_semua_prestasi', $data);
    }

    public function panduanBebasUkt()
    {
        $data = [
            'judul' => 'Panduan Bebas UKT',
        ];

        return view('home/v_panduan_bebas_ukt', $data);
    }

    public function panduanSib()
    {
        $data = [
            'judul' => 'Panduan Sistem Informasi Beasiswa',
        ];

        return view('home/v_panduan_sib', $data);
    }
  
}
