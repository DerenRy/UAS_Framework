<?php

// app/Http/Controllers/MahasiswaController.php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Fungsi untuk menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Fungsi untuk menampilkan form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Fungsi untuk menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index');
    }

    // Fungsi untuk menghapus data mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);  // Cari data berdasarkan ID
        $mahasiswa->delete();  // Hapus data mahasiswa

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
