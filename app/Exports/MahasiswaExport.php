<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromCollection, WithHeadings
{
    /**
     * Method to return the collection of data to be exported.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Mahasiswa::all(); // Ambil semua data mahasiswa
    }

    /**
     * Method to define the headings for the Excel file.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'NPM',
            'Prodi',
        ];
    }
}
