<?php

namespace App\Controllers;
use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    protected $dashboardModel;
    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();

    }

    public function index()
    {
        $pengunjungHariIni = $this->dashboardModel->hitungPengunjungHariIni();
        $totalBerita = $this->dashboardModel->totalBerita();
        $totalAgenda = $this->dashboardModel->totalAgenda();
        if(session()->get('level') == '1'){
            $view = 'dashboard/v_superadmin_dashboard';
            $data = [
                'judul' => 'Dashboard Super Admin',
                'pengunjungHariIni' => $pengunjungHariIni,
                'totalBerita' => $totalBerita,
                'totalAgenda' => $totalAgenda,
            ];
        }
        if(session()->get('level') == '2'){
            $view = 'dashboard/v_admin_dashboard';
            $data = [
                'judul' => 'Dashboard Admin',
                'pengunjungHariIni' => $pengunjungHariIni,
                'totalBerita' => $totalBerita,
                'totalAgenda' => $totalAgenda,
            ];
        }
        return view($view, $data);
    }
}
