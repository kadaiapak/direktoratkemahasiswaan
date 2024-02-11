<?php

namespace App\Controllers;
use App\Models\AgendaModel;
// use App\Models\DepartemenModel;
// use App\Models\JenjangModel;


class Agenda extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        helper('form');
        $this->agendaModel = new AgendaModel();
        // $this->departemenModel = new DepartemenModel();
    }

    public function admin_agenda()
    {
        $semuaAgenda = $this->agendaModel->getAllByAdmin();
        $data = [
            'judul' => 'Agenda Kemahasiswaan',
            'semua_agenda' => $semuaAgenda
        ];
        return view('agenda/v_admin_agenda', $data);
    }
    
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Agenda',
        ];
        return view('agenda/v_tambah_agenda', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan judul agenda'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tuliskan tanggal agenda'
                ]
            ],
            'tampil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih apakah ditampilkan atau tidak'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $data = array(
            'agenda_penulis' => session()->get('user_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'judul' => $this->request->getVar('judul'),
            'agenda_slug' => $slug,
            'tampil' => $this->request->getVar('tampil'),
        );
        $this->agendaModel->insert($data);
        return redirect()->to('/admin/agenda')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id = null)
    {
        if($id == '') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $detailAgenda = $this->agendaModel->getDetailForEdit($id);
        if (empty($detailAgenda)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Agenda ' .$id. ' tidak ditemukan');
        }
        if($detailAgenda['agenda_penulis'] == session()->get('user_id') OR session()->get('level') == 1)
        {
            $data = [
                'judul' => 'Edit Prodi',
                'detail_agenda' => $detailAgenda 
            ];
            return view('agenda/v_edit_agenda', $data);
        } else {
           return redirect()->back();
        }
    }

    public function update($id = ''){
        if($id == ''){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $judulLama = $this->request->getVar('judul_sebelum_diedit');
        $tanggalLama = $this->request->getVar('tanggal_sebelum_diedit');
        $judulBaru = $this->request->getVar('judul');
        $tanggalBaru = $this->request->getVar('tanggal');
        if($judulLama == $judulBaru){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|is_unique[agenda.judul]';
        }
        if(!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Inputkan judul agenda',
                    'is_unique' => 'Judul agenda harus unik'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $data = array(
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'agenda_slug' => $slug,
            'agenda_penulis' => session()->get('user_id'),
            'tampil' => $this->request->getVar('tampil'),  
        );
        $this->agendaModel->where('agenda_id', $id)->set($data)->update();
        return redirect()->to('/admin/agenda')->with('sukses','Data berhasil diubah!');
    }
}
