<?php

namespace App\Controllers;
use App\Models\AgendaModel;
use App\Models\BeritaModel;

class UserAgenda extends BaseController
{
    protected $agendaModel;
    protected $beritaModel;
    public function __construct()
    {
        helper('form');
        $this->agendaModel = new AgendaModel();
        $this->beritaModel = new BeritaModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function semua_agenda()
    {
        $beritaPenting = $this->beritaModel->getAllBeritaPenting($limit = 3);
        $semuaAgenda = $this->agendaModel->getAll();
        $data = [
            'judul' => 'Agenda Kemahasiswaan',
            'semuaAgenda' => $semuaAgenda,
            'beritaPenting' => $beritaPenting

        ];

        return view('home/v_semua_agenda', $data);
    }

    public function detail($slug = null)
    {
        $detailDownload = $this->agendaModel->getDetailForUser($slug);
        $beritaPenting = $this->agendaModel->getAllDownloadPenting(4);
        if (empty($detailDownload)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita ' .$slug. ' tidak ditemukan');
        }
        $data = [
            'judul' => 'Home',
            'detail_berita' => $detailDownload,
            'beritaPenting' => $beritaPenting
        ];

        return view('home/v_detail_berita', $data);
    }
    
}
