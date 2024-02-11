<?php

namespace App\Controllers;
use App\Models\DownloadModel;


class Download extends BaseController
{
    protected $downloadModel;
    public function __construct()
    {
        helper('form');
        $this->downloadModel = new DownloadModel();
    }

    public function index()
    {
        if(session()->get('level') == 1 ){
            $whereLevel = null;
        }else {
            $whereLevel = session()->get('user_id');
        }
        $semuaDownload = $this->downloadModel->getAllByAdmin($whereLevel);
        $data = [
            'judul' => 'Download',
            'semua_download' => $semuaDownload
        ];
        return view('download/v_download', $data);
    }
    
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Download',
        ];
        return view('download/v_tambah_download', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'download_judul' => [
                'rules' => 'required|is_unique[download.download_judul]',
                'errors' => [
                    'required' => 'Tuliskan judul download !',
                    'is_unique' => 'Judul sudah pernah ada !'
                ]
            ],
            'download_file' => [
                'rules' => 'uploaded[download_file]|max_size[download_file,50000]|ext_in[download_file,pdf,doc,docx,xls,xlsx]',
                'errors' => [
                    'uploaded' => 'Silahkan upload file download !',
                    'max_size' => 'Ukuran file download tidak boleh lebih dari 1MB / 1024KB !',
                    'ext_in' => 'File yang di upload tidak sesuai format'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $download_file = $this->request->getFile('download_file');
        $nama_file = $download_file->getRandomName();
        $download_file->move('./upload/download_file', $nama_file);
    
        $slug = url_title($this->request->getVar('download_judul'), '-', true);
        $data = array(
            'download_file' => $nama_file,
            'download_judul' => $this->request->getVar('download_judul'),
            'download_slug' => $slug,
            'download_penulis' => session()->get('user_id'),
            'download_tampil' => $this->request->getVar('download_tampil'),
        );
        $this->downloadModel->insert($data);
        return redirect()->to('/admin/download')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id = null)
    {
        if($id == '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $detailDownload = $this->downloadModel->getDetailForEdit($id);
        if (empty($detailDownload)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul download ' .$id. ' tidak ditemukan');
        }
        if($detailDownload['download_penulis'] == session()->get('user_id') OR session()->get('level') == 1)
        {
            $data = [
                'judul' => 'Edit Prodi',
                'detail_download' => $detailDownload 
            ];
            return view('download/v_edit_download', $data);
        } else {
           return redirect()->back();
        }
   
        
    }

    public function update($id = ''){
        if($id == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $downloadLama = $this->downloadModel->getDetailForEdit($id);
        if($downloadLama['download_judul'] == $this->request->getVar('download_judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|required|is_unique[download.download_judul]';
        }
        if(!$this->validate([
            'download_judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Inputkan judul download',
                    'is_unique' => 'Judul download harus unik'
                ]
            ],
            'download_file' => [
                'rules' => 'max_size[download_file,50000]|ext_in[download_file,pdf,doc,docx,xls,xlsx]',
                'errors' => [
                    'max_size' => 'Ukuran file download tidak boleh lebih dari 50MB / 50000KB !',
                    'ext_in' => 'File yang di upload tidak sesuai format'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $downloadFileBaru = $this->request->getFile('download_file');
        if($downloadFileBaru->getError() == 4) {
            $download_file = $this->request->getVar('download_file_lama');
        }else {
            $download_file = $downloadFileBaru->getRandomName();
            $downloadFileBaru->move('./upload/download_file', $download_file);
            // hapus file lama
            unlink('upload/download_file/'.$this->request->getVar('download_file_lama'));
        }

        $slug = url_title($this->request->getVar('download_judul'), '-', true);
        $data = array(
            'download_file' => $download_file,
            'download_judul' => $this->request->getVar('download_judul'),
            'download_slug' => $slug,
            'download_penulis' => session()->get('user_id'),
            'download_tampil' => $this->request->getVar('download_tampil'),  
        );
        $this->downloadModel->where('download_id', $id)->set($data)->update();
        return redirect()->to('/admin/download')->with('sukses','Data berhasil diubah!');
    }

    public function hapus()
    {
        $this->downloadModel->delete();
        return redirect()->to('/admin/download')->with('sukses','Data berhasil dihapus!');
    }
}
