<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPengaduan = Pengaduan::count();
        $totalPesan     = Kontak::count();

        $lastPengaduan = Pengaduan::latest()->first();
        $lastPesan     = Kontak::latest()->first();

        // Sesuaikan nama view:
        // Jika blade-mu di resources/views/dashboard.blade.php -> pakai 'dashboard'
        // Jika kamu pindah ke resources/views/admin/dashboard.blade.php -> pakai 'admin.dashboard'
        return view('dashboard', compact('totalPengaduan', 'totalPesan', 'lastPengaduan', 'lastPesan'));
    }
}
