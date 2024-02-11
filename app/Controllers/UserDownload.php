<?php

namespace App\Controllers;
use App\Models\DownloadModel;
use App\Models\BeritaModel;

class UserDownload extends BaseController
{
    protected $downloadModel;
    protected $beritaModel;
    public function __construct()
    {
        helper('form');
        $this->downloadModel = new DownloadModel();
        $this->beritaModel = new BeritaModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function semua_download()
    {
        $beritaPenting = $this->beritaModel->getAllBeritaPenting($limit = 3);
        $semuaDownload = $this->downloadModel->getPaginated(8, null, null);
        $data = [
            'judul' => 'Download',
            'semuaDownload' => $semuaDownload['download'],
            'pager' => $semuaDownload['pager'],
            'beritaPenting' => $beritaPenting

        ];

        return view('home/v_semua_download', $data);
    }

    public function detail($slug = null)
    {
        $detailDownload = $this->downloadModel->getDetailForUser($slug);
        $beritaPenting = $this->downloadModel->getAllDownloadPenting(4);
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

    public function download($namafile)
    {
        $this->downloadModel->penjumlahanTotalDownload($namafile);
        $file = $this->downloadModel->aksiDownload($namafile);
        return $this->response->download('upload/download_file/'.$file['download_file'], null);
    }
}
