<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    // ====================
    // UNTUK USER
    // ====================

    // simpan pengaduan
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|size:16|regex:/^[0-9]+$/',
            'nama_lengkap' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15|regex:/^[0-9+\-\s]+$/',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'tanggal' => 'required|date',
            'bukti_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi_pengaduan' => 'required|string',
        ], [
            'nik.required' => 'NIK wajib diisi',
            'nik.size' => 'NIK harus 16 digit',
            'nik.regex' => 'NIK hanya boleh berisi angka',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi',
            'nomor_telepon.regex' => 'Format nomor telepon tidak valid',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'alamat.required' => 'Alamat wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'bukti_foto.image' => 'File harus berupa gambar',
            'bukti_foto.mimes' => 'Format gambar: jpeg, png, jpg, gif',
            'bukti_foto.max' => 'Ukuran gambar maksimal 2MB',
            'isi_pengaduan.required' => 'Isi pengaduan wajib diisi',
        ]);

        $data = $request->all();

        // Upload file kalau ada
        if ($request->hasFile('bukti_foto')) {
            $file = $request->file('bukti_foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $data['bukti_foto'] = $file->storeAs('pengaduan', $filename, 'public');
        }

        Pengaduan::create($data);

        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
    }

    // lihat detail 1 pengaduan
    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pengaduan.show', compact('pengaduan'));
    }


    // ====================
    // UNTUK ADMIN
    // ====================

    // lihat semua pengaduan
    public function index()
    {
        $pengaduans = Pengaduan::latest()->get();
        return view('pengaduanadmin', compact('pengaduans'));
    }

    // hapus pengaduan
    public function destroy($id)
    {
        try {
            $pengaduan = Pengaduan::findOrFail($id);

            // hapus file jika ada
            if ($pengaduan->bukti_foto && Storage::disk('public')->exists($pengaduan->bukti_foto)) {
                Storage::disk('public')->delete($pengaduan->bukti_foto);
            }

            $pengaduan->delete();

            return redirect()->back()->with('success', 'Pengaduan berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus pengaduan. Silakan coba lagi.');
        }
    }
}
