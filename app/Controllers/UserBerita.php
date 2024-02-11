<?php

namespace App\Controllers;
use App\Models\BeritaModel;

class UserBerita extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        helper('form');
        $this->beritaModel = new BeritaModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function semua_berita()
    {
        $beritaPenting = $this->beritaModel->getAllBeritaPenting($limit = 3);
        $semuaBerita = $this->beritaModel->getPaginated(5, null, null);
        $data = [
            'judul' => 'Berita Terbaru',
            'semuaBerita' => $semuaBerita['berita'],
            'pager' => $semuaBerita['pager'],
            'beritaPenting' => $beritaPenting

        ];

        return view('home/v_semua_berita', $data);
    }

    public function berita_beasiswa()
    {
        $semuaBerita = $this->beritaModel->getPaginated(5, null, 1);
        $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);
        $data = [
            'judul' => 'Berita Beasiswa',
            'semuaBerita' => $semuaBerita['berita'],
            'pager' => $semuaBerita['pager'],
            'beritaPenting' => $beritaPenting
        ];
        return view('home/v_semua_berita', $data);
    }

    public function berita_prestasi()
    {
        $prestasiBerita = $this->beritaModel->getPaginated(5, null, 3);
        $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);

        $data = [
            'judul' => 'Berita Prestasi',
            'semuaBerita' => $prestasiBerita['berita'],
            'pager' => $prestasiBerita['pager'],
            'beritaPenting' => $beritaPenting

        ];
        return view('home/v_semua_berita', $data);
    }

    public function berita_organisasi()
    {
        $organisasiBerita = $this->beritaModel->getPaginated(5, null, 2);
        $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);
        $data = [
            'judul' => 'Berita Organisasi',
            'semuaBerita' => $organisasiBerita['berita'],
            'pager' => $organisasiBerita['pager'],
            'beritaPenting' => $beritaPenting

        ];
        return view('home/v_semua_berita', $data);
    }

    public function detail($slug = null)
    {
        $detailBerita = $this->beritaModel->getDetailForUser($slug);
        $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);
        if (empty($detailBerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita ' .$slug. ' tidak ditemukan');
        }
        $data = [
            'judul' => 'Detail Berita',
            'detail_berita' => $detailBerita,
            'beritaPenting' => $beritaPenting
        ];

        return view('home/v_detail_berita', $data);
    }

}
