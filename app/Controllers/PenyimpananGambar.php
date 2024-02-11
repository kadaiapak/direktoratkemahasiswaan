<?php

namespace App\Controllers;
use App\Models\PenyimpananGambarModel;


class PenyimpananGambar extends BaseController
{
    protected $penyimpananGambarModel;
    public function __construct()
    {
        helper('form');
        $this->penyimpananGambarModel = new PenyimpananGambarModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function index()
    {
        $semuaGambar = $this->penyimpananGambarModel->getAll();
        $data = [
            'judul' => 'Penyimpanan Gambar',
            'semua_gambar' => $semuaGambar
        ];
        return view('penyimpanan_gambar/v_penyimpanan_gambar', $data);
    }
    
    public function tambah()
    {
        $data = [
            'judul' => 'Upload Gambar',
        ];
        return view('penyimpanan_gambar/v_tambah_gambar', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]',
                'errors' => [
                    'uploaded' => 'Masukkan gambar',
                    'max_size' => 'Ukuran gambar harus dibawah 2048 kb atau 2Mb',
                    'is_image' => 'File yang diupload harus berbentuk gambar',
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }
        
        $gambar = $this->request->getFile('gambar');
        if($gambar->getError() != 4) {
            echo "Nama file: ".$gambar->getName();
            $gambar->move('./image_manager');
            $nama_gambar = $gambar->getName();
        }else {
            $nama_gambar = null;
        }
        date_default_timezone_set('ASIA/JAKARTA');
        $created_at = date('Y-m-d H:i:s');
        $data = array(
            'gambar_nama' => $nama_gambar,
            'created_at' => $created_at,
        );
        $this->penyimpananGambarModel->insert($data);
        return redirect()->to('/penyimpanan-gambar')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id = '')
    {
        if($id == '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'judul' => 'Edit Prodi',
            'prodi_by_id' => $this->prodiModel->find($id)
        ];
        return view('prodi/v_edit_prodi', $data);
    }

    public function update($id = ''){
        if($id == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if(!$this->validate([
            'prodi_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan nama prodi'
                ]
            ],
            'prodi_email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan email prodi'
                ]
            ],
            'prodi_website' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan website prodi'
                ]
            ],
            'prodi_kd_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan kode surat prodi, contoh : /UN35.4.3/AK/'
                ]
            ],
            'prodi_nm_kadep' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan Nama Kepala Prodi'
                ]
            ],
            'prodi_nip_kadep' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan NIP Kepala Prodi'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $data = array(
            'prodi_nama' => $this->request->getVar('prodi_nama'),
            'prodi_alias' => $this->request->getVar('prodi_alias'),
            'prodi_email' => $this->request->getVar('prodi_email'),
            'prodi_website' => $this->request->getVar('prodi_website'),
            'prodi_kd_surat' => $this->request->getVar('prodi_kd_surat'),
            'prodi_nm_kadep' => $this->request->getVar('prodi_nm_kadep'),
            'prodi_nip_kadep' => $this->request->getVar('prodi_nip_kadep'),
            'prodi_status' => 1,
        );
        $this->prodiModel->update($id, $data);
        return redirect()->to('/prodi')->with('sukses','Data berhasil diubah!');
    }

}
