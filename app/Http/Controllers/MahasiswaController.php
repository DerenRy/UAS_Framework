<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        Mahasiswa::create($validated);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan');
    }
}

