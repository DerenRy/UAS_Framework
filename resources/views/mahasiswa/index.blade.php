<a href="{{ route('mahasiswa.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-blue-600">
    Tambah Mahasiswa
</a>

<a href="{{ route('mahasiswa.exportExcel') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow-md mb-6 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
        Export ke Excel
    </a>


<table class="min-w-full bg-white border border-gray-300 rounded-lg">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b text-left">NPM</th>
            <th class="py-2 px-4 border-b text-left">Nama</th>
            <th class="py-2 px-4 border-b text-left">Prodi</th>
            <th class="py-2 px-4 border-b text-left">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td class="py-2 px-4 border-b">{{ $mhs->npm }}</td>
            <td class="py-2 px-4 border-b">{{ $mhs->nama }}</td>
            <td class="py-2 px-4 border-b">{{ $mhs->prodi }}</td>
            <td class="py-2 px-4 border-b">
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
