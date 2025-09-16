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

<!-- Visi & Misi -->
<section class="relative bg-gradient-to-br from-[#0b0d2a] via-[#101340] to-[#1a1f4a] text-white py-20">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Judul -->
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-extrabold tracking-wide mb-4">Visi & Misi</h2>
      <div class="w-24 h-1 bg-yellow-400 mx-auto rounded"></div>
      <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto">
        Bersama membangun generasi muda yang berkarya, berdaya, dan bermanfaat bagi masyarakat.
      </p>
    </div>

    <!-- Konten -->
    <div class="grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Visi -->
      <div class="bg-white/5 backdrop-blur-md rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
        <h3 class="text-2xl font-bold text-yellow-400 mb-4">Visi</h3>
        <p class="text-gray-200 leading-relaxed text-lg">
          Menjadi wadah kepemudaan yang aktif, kreatif, inovatif, dan mandiri 
          dalam mewujudkan kesejahteraan sosial masyarakat RW.008.
        </p>
      </div>

      <!-- Misi -->
      <div class="space-y-6">
        <h3 class="text-2xl font-bold text-yellow-400">Misi</h3>
        <ul class="space-y-4">
          <li class="flex items-start gap-4">
            <div class="w-10 h-10 flex items-center justify-center bg-yellow-500 text-black rounded-full font-bold shadow-md">
              1
            </div>
            <p class="text-gray-200 text-lg">
              Mengembangkan potensi generasi muda melalui kegiatan sosial, budaya, olahraga, dan pendidikan.
            </p>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-10 h-10 flex items-center justify-center bg-yellow-500 text-black rounded-full font-bold shadow-md">
              2
            </div>
            <p class="text-gray-200 text-lg">
              Meningkatkan solidaritas, kepedulian, dan kebersamaan antar pemuda serta masyarakat.
            </p>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-10 h-10 flex items-center justify-center bg-yellow-500 text-black rounded-full font-bold shadow-md">
              3
            </div>
            <p class="text-gray-200 text-lg">
              Mendukung pembangunan dan program kerja pemerintah dengan semangat gotong royong.
            </p>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-10 h-10 flex items-center justify-center bg-yellow-500 text-black rounded-full font-bold shadow-md">
              4
            </div>
            <p class="text-gray-200 text-lg">
              Menciptakan lingkungan yang sehat, aman, dan produktif bagi seluruh masyarakat RW.008.
            </p>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

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

<!-- Blog List Panjang -->
<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 space-y-6">

<!-- Card -->
<article class="bg-white rounded-xl shadow-md flex flex-col md:flex-row overflow-hidden hover:shadow-lg transition">
  <!-- Gambar -->
  <img src="fotokatar6.jpg" alt="Blog 1" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
  
  <!-- Konten -->
  <div class="p-6 flex flex-col justify-between">
    <div>
      <span class="text-sm text-yellow-500 font-medium uppercase">Event</span>
      <h3 class="text-xl font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
        Artikel Pertama Blog
      </h3>
      <p class="mt-3 text-gray-600 leading-relaxed text-sm md:text-base">
        Ini adalah contoh artikel panjang berbentuk balok horizontal. Bagian ini bisa menampilkan ringkasan isi artikel
        sehingga pembaca lebih tertarik untuk membaca detailnya.
      </p>
    </div>
    <button 
      onclick="openModal('modal1')" 
      class="mt-4 inline-block text-yellow-600 font-semibold hover:underline self-start">
      Baca Selengkapnya →
    </button>
  </div>
</article>

<!-- Modal -->
<div id="modal1" class="fixed inset-0 bg-black/0 backdrop-blur-sm flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl w-11/12 md:w-1/2 lg:w-1/3 p-6 relative shadow-lg">
    <!-- Tombol Close -->
    <button onclick="closeModal('modal1')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-red-500 font-bold text-xl">
      ✕
    </button>

    <!-- Konten Modal -->
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Artikel Pertama Blog</h2>
    <img src="fotokatar6.jpg" alt="Blog Detail" class="w-full h-56 object-cover rounded-lg mb-4">
    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
      Ini adalah isi lengkap dari artikel pertama. Kamu bisa menuliskan detail penjelasan di sini dengan tampilan portrait,
      dan pembaca bisa menutup modal untuk kembali ke halaman utama.
    </p>
  </div>
</div>

<script>
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }
</script>

<!-- Card 2 -->
<article class="bg-white rounded-xl shadow-md flex flex-col md:flex-row overflow-hidden hover:shadow-lg transition">
  <img src="fotokatar4.jpg" alt="Blog 2" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
  <div class="p-6 flex flex-col justify-between">
    <div>
      <span class="text-sm text-yellow-500 font-medium uppercase">Berita</span>
      <h3 class="text-xl font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
        Artikel Kedua Blog
      </h3>
      <p class="mt-3 text-gray-600 leading-relaxed text-sm md:text-base">
        Contoh card panjang kedua, ditata rapi agar memanjang ke samping. Bagus dipakai untuk menampilkan daftar artikel 
        dengan gambar thumbnail di samping.
      </p>
    </div>
    <button 
      onclick="openModal('modal2')" 
      class="mt-4 text-yellow-600 font-semibold hover:underline self-start">
      Baca Selengkapnya →
    </button>
  </div>
</article>

<!-- Modal 2 -->
<div id="modal2" class="fixed inset-0 bg-black/0 backdrop-blur-sm flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl w-11/12 md:w-1/2 lg:w-1/3 p-6 relative shadow-lg">
    <button onclick="closeModal('modal2')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-red-500 font-bold text-xl">
      ✕
    </button>
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Artikel Kedua Blog</h2>
    <img src="fotokatar4.jpg" alt="Blog Detail" class="w-full h-56 object-cover rounded-lg mb-4">
    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
      Ini adalah isi lengkap dari artikel kedua. Kamu bisa menuliskan detail penjelasan di sini dengan tampilan portrait.
    </p>
  </div>
</div>

<!-- Card 3 -->
<article class="bg-white rounded-xl shadow-md flex flex-col md:flex-row overflow-hidden hover:shadow-lg transition">
  <img src="fotokatar5.jpg" alt="Blog 3" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
  <div class="p-6 flex flex-col justify-between">
    <div>
      <span class="text-sm text-yellow-500 font-medium uppercase">Opini</span>
      <h3 class="text-xl font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
        Artikel Ketiga Blog
      </h3>
      <p class="mt-3 text-gray-600 leading-relaxed text-sm md:text-base">
        Card panjang ini bisa dipakai sebagai balok artikel yang konsisten ditumpuk ke bawah, rapi untuk tampilan blog 
        atau portal berita.
      </p>
    </div>
    <button 
      onclick="openModal('modal3')" 
      class="mt-4 text-yellow-600 font-semibold hover:underline self-start">
      Baca Selengkapnya →
    </button>
  </div>
</article>

<!-- Modal 3 -->
<div id="modal3" class="fixed inset-0 bg-black/0 backdrop-blur-sm flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl w-11/12 md:w-1/2 lg:w-1/3 p-6 relative shadow-lg">
    <button onclick="closeModal('modal3')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-red-500 font-bold text-xl">
      ✕
    </button>
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Artikel Ketiga Blog</h2>
    <img src="fotokatar5.jpg" alt="Blog Detail" class="w-full h-56 object-cover rounded-lg mb-4">
    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
      Ini adalah isi lengkap dari artikel ketiga. Kamu bisa menuliskan detail penjelasan di sini dengan tampilan portrait.
    </p>
  </div>
</div>

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
