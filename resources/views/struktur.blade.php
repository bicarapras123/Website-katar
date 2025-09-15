<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal - Website Katar 008</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-white">

<header class="sticky top-0 left-0 w-full z-50 bg-[#0b0d2a] shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('logokatar.png') }}" alt="Logo" class="h-12">
            <span class="font-bold text-xl text-white">KARANG TARUNA RW.008</span>
        </div>

<!-- Menu -->
<nav class="flex items-center gap-6 text-sm uppercase font-semibold tracking-wide text-white">
    <a href="{{ url('/') }}" 
       class="hover:text-yellow-400 {{ Request::is('/') ? 'text-yellow-400' : 'text-white' }}">
       Beranda
    </a>
    <a href="{{ url('/portofolio') }}" 
       class="hover:text-yellow-400 {{ Request::is('portofolio') ? 'text-yellow-400' : 'text-white' }}">
       Portof
    </a>
    <a href="{{ url('/struktur') }}" 
       class="hover:text-yellow-400 {{ Request::is('struktur') ? 'text-yellow-400' : 'text-white' }}">
       Struktur
    </a>
    <a href="{{ url('/layanan') }}" 
       class="hover:text-yellow-400 {{ Request::is('layanan') ? 'text-yellow-400' : 'text-white' }}">
       Layanan
    </a>
</nav>

    </div>
</header>

<!-- Floating Buttons -->
<div class="fixed bottom-6 right-6 flex flex-col gap-4 z-50">

    <!-- WhatsApp -->
    <a href="https://wa.me/628123456789" target="_blank" 
       class="bg-green-500 p-3 rounded-full shadow-lg hover:bg-green-600 transition flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-6 h-6 text-white" 
             viewBox="0 0 32 32" fill="currentColor">
            <path d="M16.001 3C9.373 3 4 8.373 4 15c0 2.646.845 5.093 2.272 7.093L4 29l7.093-2.272A11.937 11.937 0 0016 27c6.627 0 12-5.373 12-12S22.628 3 16.001 3zm0 21.917a9.91 9.91 0 01-5.032-1.374l-.361-.215-4.209 1.35 1.364-4.104-.235-.376A9.91 9.91 0 016.09 15c0-5.462 4.449-9.91 9.911-9.91 5.461 0 9.91 4.448 9.91 9.91s-4.449 9.917-9.91 9.917zm5.428-7.453c-.297-.149-1.758-.867-2.031-.966-.273-.099-.472-.149-.67.15-.198.297-.767.965-.94 1.162-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.787-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.67-1.611-.916-2.206-.242-.58-.487-.5-.67-.51l-.571-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.097 3.201 5.087 4.487.711.306 1.265.489 1.697.626.713.227 1.362.195 1.875.118.572-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
        </svg>
    </a>
</div>

<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <!-- Judul -->
    <h2 class="text-3xl font-bold text-gray-800 mb-12">
      Struktur Organisasi Karang Taruna RW.008
    </h2>

    <!-- Ketua -->
    <div class="flex justify-center mb-12">
      <div class="bg-white shadow-lg rounded-xl p-6 w-60">
        <img src="logokatar.png" alt="Ketua" class="w-24 h-24 mx-auto rounded-full object-cover mb-4 border-4 border-yellow-400">
        <h3 class="text-lg font-bold text-gray-800">Nama Ketua</h3>
        <p class="text-sm text-gray-600">Ketua</p>
      </div>
    </div>

    <!-- Wakil Ketua -->
    <div class="flex justify-center gap-6 mb-12">
      <div class="bg-white shadow-md rounded-xl p-6 w-56">
        <img src="logokatar.png" alt="Wakil 1" class="w-20 h-20 mx-auto rounded-full object-cover mb-3 border-2 border-yellow-300">
        <h3 class="font-bold text-gray-800">Nama Wakil 1</h3>
        <p class="text-sm text-gray-600">Wakil Ketua I</p>
      </div>
      <div class="bg-white shadow-md rounded-xl p-6 w-56">
        <img src="logokatar.png" alt="Wakil 2" class="w-20 h-20 mx-auto rounded-full object-cover mb-3 border-2 border-yellow-300">
        <h3 class="font-bold text-gray-800">Nama Wakil 2</h3>
        <p class="text-sm text-gray-600">Wakil Ketua II</p>
      </div>
    </div>

    <!-- Sekretaris & Bendahara -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto mb-12">
      <div class="bg-white shadow-md rounded-xl p-6">
        <img src="logokatar.png" alt="Sekretaris" class="w-20 h-20 mx-auto rounded-full object-cover mb-3 border-2 border-yellow-300">
        <h3 class="font-bold text-gray-800">Nama Sekretaris</h3>
        <p class="text-sm text-gray-600">Sekretaris</p>
      </div>
      <div class="bg-white shadow-md rounded-xl p-6">
        <img src="logokatar.png" alt="Bendahara" class="w-20 h-20 mx-auto rounded-full object-cover mb-3 border-2 border-yellow-300">
        <h3 class="font-bold text-gray-800">Nama Bendahara</h3>
        <p class="text-sm text-gray-600">Bendahara</p>
      </div>
    </div>

    <!-- Divisi -->
    <h3 class="text-2xl font-semibold text-gray-700 mb-6">Koordinator Divisi</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Divisi 1" class="w-16 h-16 mx-auto rounded-full mb-3 border border-yellow-300">
        <h4 class="font-bold text-gray-800">Nama 1</h4>
        <p class="text-sm text-gray-600">Divisi Sosial</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Divisi 2" class="w-16 h-16 mx-auto rounded-full mb-3 border border-yellow-300">
        <h4 class="font-bold text-gray-800">Nama 2</h4>
        <p class="text-sm text-gray-600">Divisi Olahraga</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Divisi 3" class="w-16 h-16 mx-auto rounded-full mb-3 border border-yellow-300">
        <h4 class="font-bold text-gray-800">Nama 3</h4>
        <p class="text-sm text-gray-600">Divisi Pendidikan</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Divisi 4" class="w-16 h-16 mx-auto rounded-full mb-3 border border-yellow-300">
        <h4 class="font-bold text-gray-800">Nama 4</h4>
        <p class="text-sm text-gray-600">Divisi Kesehatan</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Divisi 5" class="w-16 h-16 mx-auto rounded-full mb-3 border border-yellow-300">
        <h4 class="font-bold text-gray-800">Nama 5</h4>
        <p class="text-sm text-gray-600">Divisi Kreatif</p>
      </div>
    </div>

    <!-- Anggota lainnya -->
    <h3 class="text-2xl font-semibold text-gray-700 mt-12 mb-6">Anggota</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 1" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 6</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 2" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 7</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 3" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 8</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 4" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 9</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 5" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 10</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 6" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 11</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 7" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 12</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
      <div class="bg-white shadow rounded-lg p-4">
        <img src="logokatar.png" alt="Anggota 8" class="w-16 h-16 mx-auto rounded-full mb-3 border border-gray-300">
        <h4 class="font-bold text-gray-800">Nama 13</h4>
        <p class="text-sm text-gray-600">Anggota</p>
      </div>
    </div>
  </div>
</section>

<!-- Pengesahan -->
<section class="py-12 bg-gradient-to-r from-[#0b0d2a] to-[#1a1c3a] text-white">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <div class="bg-white/10 backdrop-blur-lg border border-yellow-400 shadow-xl rounded-2xl p-8 relative">
      <!-- Icon Sertifikat -->
      <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-yellow-400 rounded-full p-3 shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#0b0d2a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
        </svg>
      </div>

      <!-- Isi -->
      <h3 class="text-2xl font-bold text-yellow-400 mt-6 mb-4">Pengesahan Struktur</h3>
      <p class="text-lg leading-relaxed text-gray-200">
        Struktur Organisasi <span class="font-semibold">Karang Taruna RW.008</span> ini telah 
        <span class="font-semibold text-yellow-400">disahkan secara resmi</span> oleh 
        <br> Ketua Karang Taruna Kelurahan Kemanggisan sebagai bentuk 
        <span class="italic">legitimasi dan pengakuan kepengurusan</span>.
      </p>

<!-- Tanda tangan asli -->
<div class="mt-2 text-center">
  <p class="font-semibold text-yellow-300 mb-0">
    Ketua Karang Taruna Kelurahan Kemanggisan
  </p>
  <div class="mt-0">
    <img src="{{ asset('ttdpras.png') }}" 
         alt="Tanda Tangan Ketua" 
         class="mx-auto h-40 object-contain"
         style="filter: brightness(0) invert(1);">
  </div>
  <p class="mt-0 text-sm text-gray-300 ">Muhammad Prasetyo</p>
</div>

</section>

<footer class="bg-[#0b0d2a] text-white py-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 px-6">

    <!-- Logo & Social -->
    <div class="text-center md:text-left">
      <img src="logokatar.png" alt="Logo" class="h-14 md:h-16 mb-4 mx-auto md:mx-0">
      <div class="flex justify-center md:justify-start gap-3">
        <!-- Instagram -->
        <a href="#" class="bg-yellow-500 text-black p-2 md:p-3 rounded-full hover:bg-yellow-400 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4 md:w-5 md:h-5">
            <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm5.25-.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0z"/>
          </svg>
        </a>
        <!-- Email -->
        <a href="#" class="bg-yellow-500 text-black p-2 md:p-3 rounded-full hover:bg-yellow-400 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4 md:w-5 md:h-5">
            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2v.5l-8 5-8-5V6h16zm0 12H4V8l8 5 8-5v10z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- About Us -->
    <div class="text-center md:text-left">
      <h3 class="text-yellow-400 font-semibold mb-3">ABOUT US</h3>
      <p class="text-sm text-gray-300 leading-relaxed">
        SDA Muda adalah forum independen bagi SDA muda Ditjen SDA untuk berkontribusi, memperluas jaringan, 
        dan meningkatkan kompetensi dengan prinsip iProVe dan gerakan AIR.
      </p>
    </div>

    <!-- Contact -->
    <div class="text-center md:text-left">
      <h3 class="text-yellow-400 font-semibold mb-3">CONTACT</h3>
      <ul class="space-y-2 text-sm text-gray-300">
        <li class="flex items-center justify-center md:justify-start gap-2">
          <i class="fas fa-phone text-yellow-400"></i>
          Faza : +62 857-2942-3611
        </li>
        <li class="flex items-center justify-center md:justify-start gap-2">
          <i class="fas fa-phone text-yellow-400"></i>
          Faza : +62 857-2942-3611
        </li>
        <li class="flex items-center justify-center md:justify-start gap-2">
          <i class="fas fa-envelope text-yellow-400"></i>
          Email: Sdamudajaya@Gmail.Com
        </li>
      </ul>
    </div>

    <!-- Latest Post -->
    <div class="text-center md:text-left">
      <h3 class="text-yellow-400 font-semibold mb-3">LATEST POST</h3>
      <ul class="space-y-3 text-sm text-gray-300">
        <li class="flex flex-col sm:flex-row items-center sm:items-start gap-3">
          <img src="logokatar.png" alt="Post 1" class="w-12 h-12 rounded object-cover">
          <p>SDA Muda, Wadah Pengembangan Diri dan Inovasi SDA Muda di Ditjen SDA</p>
        </li>
        <li class="flex flex-col sm:flex-row items-center sm:items-start gap-3">
          <img src="logokatar.png" alt="Post 2" class="w-12 h-12 rounded object-cover">
          <p>Peran SDA Muda dalam Meningkatkan Kompetensi dan Jaringan SDA Muda di Ditjen SDA</p>
        </li>
      </ul>
    </div>

  </div>

  <!-- Bottom -->
  <div class="border-t border-gray-700 mt-10 pt-9 text-center text-sm text-gray-400">
    <p>©2025 SDA Muda. All Rights Reserved.</p>
    <p class="mt-1">Published by <a href="https://www.esain.co.id" target="_blank" class="text-yellow-400">www.esain.co.id</a></p>
  </div>
</footer>


</body>
</html>

