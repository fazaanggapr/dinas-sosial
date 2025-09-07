<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    /**
     * Tampilkan halaman kontak untuk user
     */
    public function create()
    {
        return view('kontak');
    }

    /**
     * Simpan data kontak dari user
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string|max:5000'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.max' => 'Email maksimal 255 karakter',
            'pesan.required' => 'Pesan wajib diisi',
            'pesan.max' => 'Pesan maksimal 5000 karakter'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Simpan ke database
            Kontak::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan
            ]);

            return redirect()->back()->with('success', 'Pesan berhasil dikirim! Terima kasih telah menghubungi kami.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.')->withInput();
        }
    }

    /**
     * Tampilkan halaman admin untuk melihat semua kontak
     */
    public function index()
    {
        $kontaks = Kontak::orderBy('created_at', 'desc')->get();
        return view('kontakadmin', compact('kontaks'));
    }

    /**
     * Hapus data kontak (opsional untuk admin)
     */
    public function destroy($id)
    {
        try {
            $kontak = Kontak::findOrFail($id);
            $kontak->delete();

            return redirect()->back()->with('success', 'Data kontak berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
