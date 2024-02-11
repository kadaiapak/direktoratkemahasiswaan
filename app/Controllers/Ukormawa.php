<?php

namespace App\Controllers;
use App\Models\UkormawaModel;


class Ukormawa extends BaseController
{
    protected $ukormawaModel;
    public function __construct()
    {
        helper('form');
        $this->ukormawaModel = new UkormawaModel();
    }

    public function admin_ukormawa()
    {
        $semuaUkormawa = $this->ukormawaModel->getAllByAdmin();
        $data = [
            'judul' => 'Unit Kegiatan/ ORMAWA',
            'semua_ukormawa' => $semuaUkormawa
        ];
        return view('ukormawa/v_admin_ukormawa', $data);
    }
    
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Uk Ormawa',
        ];
        return view('ukormawa/v_tambah_ukormawa', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'ukormawa_judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan nama UK/ ORMAWA'
                ]
            ],
            'ukormawa_ketua' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan nama ketua UK/ ORMAWA'
                ]
            ],
            'ukormawa_tampil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih apakah ditampilkan atau tidak'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }
        
        $slug = url_title($this->request->getVar('ukormawa_judul'), '-', true);
        $data = array(
            'ukormawa_penulis' => session()->get('user_id'),
            'ukormawa_judul' => $this->request->getVar('ukormawa_judul'),
            'ukormawa_deskripsi' => $this->request->getVar('ukormawa_deskripsi'),
            'ukormawa_slug' => $slug,
            'ukormawa_ketua' => $this->request->getVar('ukormawa_ketua'),
            'ukormawa_awal_menjabat' => $this->request->getVar('ukormawa_awal_menjabat'),
            'ukormawa_akhir_menjabat' => $this->request->getVar('ukormawa_akhir_menjabat'),
            'ukormawa_kontak' => $this->request->getVar('ukormawa_kontak'),
            'ukormawa_jumlah_anggota' => $this->request->getVar('ukormawa_jumlah_anggota'),
            'ukormawa_tampil' => $this->request->getVar('ukormawa_tampil'),
            'ukormawa_aktif' => $this->request->getVar('ukormawa_aktif'),
        );
        $this->ukormawaModel->insert($data);
        return redirect()->to('/admin/ukormawa')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id = null)
    {
        if($id == '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $detailUkormawa = $this->ukormawaModel->getDetailForEdit($id);
        if (empty($detailUkormawa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('UK ORMAWA ' .$id. ' tidak ditemukan');
        }
        if($detailUkormawa['ukormawa_penulis'] == session()->get('user_id') OR session()->get('level') == 1)
        {
            $data = [
                'judul' => 'Edit Prodi',
                'detail_ukormawa' => $detailUkormawa 
            ];
            return view('ukormawa/v_edit_ukormawa', $data);
        } else {
           return redirect()->back();
        }
    }

    public function update($id = ''){
        if($id == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if(!$this->validate([
            'ukormawa_judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Inputkan judul agenda',
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('ukormawa_judul'), '-', true);
        $data = array(
            'ukormawa_penulis' => session()->get('user_id'),
            'ukormawa_judul' => $this->request->getVar('ukormawa_judul'),
            'ukormawa_deskripsi' => $this->request->getVar('ukormawa_deskripsi'),
            'ukormawa_slug' => $slug,
            'ukormawa_ketua' => $this->request->getVar('ukormawa_ketua'),
            'ukormawa_awal_menjabat' => $this->request->getVar('ukormawa_awal_menjabat'),
            'ukormawa_akhir_menjabat' => $this->request->getVar('ukormawa_akhir_menjabat'),
            'ukormawa_kontak' => $this->request->getVar('ukormawa_kontak'),
            'ukormawa_jumlah_anggota' => $this->request->getVar('ukormawa_jumlah_anggota'),
            'ukormawa_tampil' => $this->request->getVar('ukormawa_tampil'),
            'ukormawa_aktif' => $this->request->getVar('ukormawa_aktif'),
        );
        $this->ukormawaModel->where('ukormawa_id', $id)->set($data)->update();
        return redirect()->to('/admin/ukormawa')->with('sukses','Data berhasil diubah!');
    }
}
