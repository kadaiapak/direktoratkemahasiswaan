<?php

namespace App\Controllers;
use App\Models\BeritaModel;
// use App\Models\DepartemenModel;
// use App\Models\JenjangModel;


class Berita extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        helper('form');
        $this->beritaModel = new BeritaModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function index()
    {
        if(session()->get('level') == 1 ){
            $whereLevel = null;
        }else {
            $whereLevel = session()->get('user_id');
        }
        $semuaBerita = $this->beritaModel->getAllByAdmin($whereLevel);
        $data = [
            'judul' => 'Berita',
            'semua_berita' => $semuaBerita
        ];
        return view('berita/v_berita', $data);
    }
    
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Berita',
        ];
        return view('berita/v_tambah_berita', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'berita_judul' => [
                'rules' => 'required|is_unique[berita.berita_judul]',
                'errors' => [
                    'required' => 'Tuliskan judul berita !',
                    'is_unique' => 'Judul sudah pernah ada !'
                ]
            ],
            'berita_sampul' => [
                'rules' => 'uploaded[berita_sampul]|max_size[berita_sampul,1024]|is_image[berita_sampul]',
                'errors' => [
                    'uploaded' => 'Silahkan upload sampul berita !',
                    'max_size' => 'Ukuran sampul berita tidak boleh lebih dari 1MB / 1024KB !',
                    'is_image' => 'Sampul Berita harus Gambar'
                ]
            ],
            'berita_isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tulis isi berita'
                ]
            ],
            'berita_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih kategori berita'
                ]
            ],
            'berita_subkategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih subkategori berita'
                ]
            ]
        ])){
            return redirect()->back()->withInput();
        }

        $berita_sampul = $this->request->getFile('berita_sampul');
        $nama_sampul = $berita_sampul->getRandomName();
        echo "Nama file: ".$nama_sampul;
        $berita_sampul->move('./upload/berita_sampul', $nama_sampul);
    
        $slug = url_title($this->request->getVar('berita_judul'), '-', true);
        $data = array(
            'berita_sampul' => $nama_sampul,
            'berita_judul' => $this->request->getVar('berita_judul'),
            'berita_slug' => $slug,
            'berita_isi' => $this->request->getVar('berita_isi'),
            'berita_kategori' => $this->request->getVar('berita_kategori'),
            'berita_subkategori' => $this->request->getVar('berita_subkategori'),
            'berita_penulis' => session()->get('user_id'),
            'berita_tampil' => $this->request->getVar('berita_tampil'),
            // 'kata_kunci' => $this->request->getVar('kata_kunci'),
            // 'deskripsi_meta' => $this->request->getVar('deskripsi_meta'),
        );
        $this->beritaModel->insert($data);
        return redirect()->to('/admin/berita')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($slug = null)
    {
        if($slug == '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $detailBerita = $this->beritaModel->getDetail($slug);
        if (empty($detailBerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita ' .$slug. ' tidak ditemukan');
        }
        if($detailBerita['berita_penulis'] == session()->get('user_id') OR session()->get('level') == 1)
        {
            $data = [
                'judul' => 'Edit Prodi',
                'detail_berita' => $detailBerita 
            ];
            return view('berita/v_edit_berita', $data);
        } else {
           return redirect()->back();
        }
   
        
    }

    public function update($id = ''){
        if($id == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $slug = $this->request->getVar('slug');
        $beritaLama = $this->beritaModel->getDetail($slug);
        if($beritaLama['berita_judul'] == $this->request->getVar('berita_judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|required|is_unique[berita.berita_judul]';
        }
        if(!$this->validate([
            'berita_judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Inputkan judul berita',
                    'is_unique' => 'Judul berita harus unik'
                ]
            ],
            'berita_sampul' => [
                'rules' => 'max_size[berita_sampul,1024]|is_image[berita_sampul]',
                'errors' => [
                    'uploaded' => 'Silahkan upload sampul berita !',
                    'max_size' => 'Ukuran sampul berita tidak boleh lebih dari 1MB / 1024KB !',
                    'is_image' => 'Sampul Berita harus Gambar'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $beritaSampulBaru = $this->request->getFile('berita_sampul');
        if($beritaSampulBaru->getError() == 4) {
            $berita_sampul = $this->request->getVar('berita_sampul_lama');
        }else {
            $berita_sampul = $beritaSampulBaru->getRandomName();
            $beritaSampulBaru->move('./upload/berita_sampul', $berita_sampul);
            // hapus file lama
            unlink('upload/berita_sampul/'.$this->request->getVar('berita_sampul_lama'));
        }

        $slug = url_title($this->request->getVar('berita_judul'), '-', true);
        $data = array(
            'berita_sampul' => $berita_sampul,
            'berita_judul' => $this->request->getVar('berita_judul'),
            'berita_slug' => $slug,
            'berita_isi' => $this->request->getVar('berita_isi'),
            'berita_kategori' => $this->request->getVar('berita_kategori'),
            'berita_subkategori' => $this->request->getVar('berita_subkategori'),
            'berita_penulis' => session()->get('user_id'),
            'berita_tampil' => $this->request->getVar('berita_tampil'),  
            // 'kata_kunci' => $this->request->getVar('kata_kunci'),
            // 'deskripsi_meta' => $this->request->getVar('deskripsi_meta'),
        );
        $this->beritaModel->where('berita_id', $id)->set($data)->update();
        return redirect()->to('/admin/berita')->with('sukses','Data berhasil diubah!');
    }

    public function hapus()
    {
        $this->beritaModel->delete();
        return redirect()->to('/admin/berita')->with('sukses','Data berhasil dihapus!');
    }
}
