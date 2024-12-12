<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-2xl font-bold">Daftar Mahasiswa</h2>
                        @if (session('success'))
                            <x-auth-session-status class="mb-4" :status="session('success')" />
                        @endif
                        
                        <!-- Tombol untuk menuju halaman tambah mahasiswa -->
                        <a href="{{ route('mahasiswa.create') }}" class="inline-block mb-5 bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Tambah Mahasiswa
                        </a>

                         <!-- Tombol Export ke Excel -->
                         <a href="{{ route('mahasiswa.export') }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mb-5">
                            Export ke Excel
                        </a>

                        <!-- Tabel daftar mahasiswa -->
                        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                            <table class="min-w-full table-auto">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="py-3 px-6 text-left">NPM</th>
                                        <th class="py-3 px-6 text-left">Nama</th>
                                        <th class="py-3 px-6 text-left">Prodi</th>
                                        <th class="py-3 px-6 text-left">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswa as $mhs)
                                        <tr class="border-b hover:bg-gray-100">
                                            <td class="py-3 px-6">{{ $mhs->npm }}</td>
                                            <td class="py-3 px-6">{{ $mhs->nama }}</td>
                                            <td class="py-3 px-6">{{ $mhs->prodi }}</td>
                                            <td class="py-3 px-6">
                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @vite('resources/js/app.js') <!-- Include Vite's JS assets -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
