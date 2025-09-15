<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Portal Katar 008</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-indigo-100 min-h-screen flex flex-col items-center py-10">

  <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-7xl">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row items-center justify-between mb-8">
      <!-- Judul -->
      <div>
        <h1 class="text-4xl font-extrabold flex items-center gap-3 text-indigo-700">
          <!-- SVG Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v14m-4-4h8" />
          </svg>
          Dashboard Layanan
        </h1>
        <p class="text-gray-600 mt-2 text-lg">
          Ringkasan data layanan yang tersimpan di <b>database Portal Katar 008</b>
        </p>
      </div>

      <!-- Search -->
      <div class="mt-4 md:mt-0">
        <form action="{{ route('layanan') }}" method="GET">
          <input type="text" name="search" value="{{ request('search') }}"
                 placeholder="Cari nama atau email..."
                 class="px-4 py-2 w-72 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </form>
      </div>
    </div>

    <!-- Tabel Data -->
    <div class="overflow-x-auto rounded-lg shadow-lg">
      <table class="min-w-full border-collapse">
        <thead class="sticky top-0">
          <tr class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">No</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Alamat</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Pesan</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Dibuat</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Diperbarui</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          @forelse($layanans as $layanan)
            <tr class="{{ $loop->odd ? 'bg-gray-50' : 'bg-white' }} hover:bg-indigo-50 transition">
              <td class="px-6 py-4 text-sm text-gray-700 font-semibold">{{ $loop->iteration }}</td>
              <td class="px-6 py-4 text-sm text-gray-700">{{ $layanan->nama }}</td>
              <td class="px-6 py-4 text-sm text-gray-700">{{ $layanan->email }}</td>
              <td class="px-6 py-4 text-sm text-gray-700">{{ $layanan->alamat }}</td>
              <td class="px-6 py-4 text-sm">
                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-medium rounded-full">
                  {{ $layanan->pesan }}
                </span>
              </td>
              <td class="px-6 py-4 text-xs text-gray-500">{{ $layanan->created_at->format('d M Y H:i') }}</td>
              <td class="px-6 py-4 text-xs text-gray-500">{{ $layanan->updated_at->diffForHumans() }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="px-6 py-6 text-center text-gray-500">Belum ada data layanan.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
