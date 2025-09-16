<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal - Website Katar 008</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0b0d2a] text-white">

<header class="sticky top-0 left-0 w-full z-50 bg-[#0b0d2a] shadow-md ">
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


<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Slider -->
    <div class="absolute inset-0">
        <div id="slider" class="w-full h-full relative">
            <!-- Slide 1 -->
            <img src="fotokatar2.jpg" 
                 alt="background 1" 
                 class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000 slide">
            <!-- Slide 2 -->
            <img src="fotokatar7.jpg" 
                 alt="background 2" 
                 class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000 slide">
            <!-- Slide 3 -->
            <img src="fotokatar8.jpg" 
                 alt="background 3" 
                 class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000 slide">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#0b0d2a]/80 to-[#0b0d2a]"></div>
    </div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-3xl px-6">
            <h1 class="text-5xl md:text-5xl font-bold text-yellow-400 mb-4">
            KARANG TARUNA RW.008
            </h1>
            <p class="text-lg md:text-xl font-light mb-2 tracking-wide">
                SMART . INNOVATIVE . REVOLUTIONARY
            </p>
            <p class="mt-6 text-gray-300 leading-relaxed">
            Karang Taruna adalah organisasi sosial kemasyarakatan yang menjadi wadah dan sarana bagi generasi muda untuk mengembangkan diri, berdasar atas kesadaran dan tanggung jawab sosial dari, oleh, dan untuk masyarakat di wilayah desa/kelurahan, dengan tujuan utama mengantisipasi masalah kesejahteraan sosial 
            dan mendorong pertumbuhan masyarakat yang berkualitas, cerdas, dan inovatif.
            </p>
            <a href="#kontak" class="mt-8 inline-block bg-yellow-400 text-black px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

    <script>
    const slides = document.querySelectorAll("#slider .slide");
    let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].classList.remove("opacity-100");
        slides[currentSlide].classList.add("opacity-0");

        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.remove("opacity-0");
        slides[currentSlide].classList.add("opacity-100");
    }

    setInterval(showNextSlide, 4000); // ganti slide setiap 4 detik
</script>
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


        <!-- About Section -->
        <section id="tentang" class="py-16 bg-white text-gray-800">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Gambar -->
            <div class="relative">
                <div class="bg-white shadow-xl rounded-2xl p-4">
                    <img src="{{ asset('fotokatar1.jpg') }}" alt="Tentang SDA Muda" class="rounded-xl">
                </div>
                <!-- Logo kecil di pojok -->
                <div class="absolute -bottom-6 -left-6 bg-[#0b0d2a] p-3 rounded-xl shadow-lg">
                    <img src="{{ asset('logokatar.png') }}" alt="Logo SDA Muda" class="h-16 w-auto">
                </div>
            </div>

            <!-- Konten -->
            <div>
            <span class="text-sm tracking-widest text-yellow-500 font-semibold uppercase">About Us</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6 text-[#0b0d2a]">KARANG TARUNA RW.008</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Karang Taruna RW.008 adalah organisasi kepemudaan yang menjadi wadah pengembangan generasi muda di tingkat lingkungan RW.008. 
                Organisasi ini hadir sebagai ruang kebersamaan, kreativitas, dan pengabdian untuk mendukung pembangunan sosial serta meningkatkan kualitas hidup masyarakat.
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Dengan semangat gotong royong dan solidaritas, Karang Taruna RW.008 aktif mengadakan kegiatan sosial, budaya, olahraga, serta pelatihan kewirausahaan. 
                Hal ini bertujuan untuk memperkuat rasa persaudaraan antarwarga sekaligus menumbuhkan jiwa kepemimpinan dan kemandirian pada para pemuda.
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Anggota Karang Taruna RW.008 adalah para pemuda dan remaja di lingkungan RW.008 yang memiliki tekad untuk berkontribusi nyata bagi kemajuan bersama. 
                Mereka tidak hanya menjadi motor penggerak kegiatan kepemudaan, tetapi juga mitra penting masyarakat dan pemerintah dalam membangun lingkungan yang lebih harmonis dan berdaya.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Karang Taruna RW.008 diharapkan dapat menjadi garda terdepan dalam menjawab tantangan zaman, menjadi jembatan antar generasi, serta melahirkan generasi muda yang adaptif, inovatif, dan berkarakter.
            </p>

            </div>
        </div>
    </section>

<!-- Value Section -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 divide-y md:divide-y-0 md:divide-x divide-gray-200">

      <!-- Item 1 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Check Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Pengembangan Kompetensi</h3>
          <p class="text-gray-600 text-sm mt-2">
            Meningkatkan keterampilan dan wawasan melalui pelatihan dan diskusi.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Network Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a8 8 0 10-16 0v2h5" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Perluasan Jaringan</h3>
          <p class="text-gray-600 text-sm mt-2">
            Membangun koneksi profesional di lingkungan Ditjen SDA dan mitra terkait.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Lightbulb Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8a4 4 0 00-4 4v1a4 4 0 008 0v-1a4 4 0 00-4-4z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h.01" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Inovasi & Adaptasi</h3>
          <p class="text-gray-600 text-sm mt-2">
            Mendorong kreativitas melalui prinsip iProVe dan gerakan AIR.
          </p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Users Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a8 8 0 00-16 0v2h5" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Kolaborasi Tim</h3>
          <p class="text-gray-600 text-sm mt-2">
            Meningkatkan kerja sama tim lintas bidang dan generasi.
          </p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Book Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4H3m9 0v16" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Transfer Pengetahuan</h3>
          <p class="text-gray-600 text-sm mt-2">
            Menjadi wadah berbagi ilmu dan pengalaman antar anggota.
          </p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="flex flex-col items-center md:items-start gap-4 px-6">
        <div class="flex-shrink-0 bg-[#0b0d2a] text-yellow-400 p-3 rounded-full">
          <!-- Globe Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800">Kontribusi Sosial</h3>
          <p class="text-gray-600 text-sm mt-2">
            Memberikan dampak positif ke masyarakat melalui aksi nyata.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Initiators Section -->
<section id="initiators" class="py-16 bg-gray-50 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Title -->
        <h2 class="text-2xl md:text-3xl font-bold text-yellow-600 uppercase mb-12">
            The Initiators
        </h2>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('logokatar.png') }}" alt="Sigit Marwanto" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Sigit Marwanto</h3>
                    <p class="text-sm text-gray-500">Project Manager</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('logokatar.png') }}" alt="Stefan Theophilus" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Stefan Theophilus</h3>
                    <p class="text-sm text-gray-500">Project Manager</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('logokatar.png') }}" alt="Andi Muhammad" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Andi Muhammad</h3>
                    <p class="text-sm text-gray-500">Project Manager</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Blog Header -->
<section class="relative h-72 flex items-center justify-center text-center text-white">
    <div class="absolute inset-0">
        <img src="fotokatar3.jpg" alt="Blog Header" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/70"></div>
    </div>
    <div class="relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold">PROGRAM</h1>
        <div class="mt-2 w-16 h-1 bg-yellow-500 mx-auto"></div>
        <p class="mt-4 text-yellow-400"><a href="#">Home</a> &raquo; Blog</p>
    </div>
</section>

<!-- Blog List -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <img src="fotokatar6.jpg" alt="Blog 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-yellow-500 font-medium uppercase">Event</span>
                    <h3 class="text-lg font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
                        Artikel Pertama Blog
                    </h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Ini adalah contoh deskripsi singkat dari blog yang akan menarik pembaca untuk klik dan membaca lebih lanjut.
                    </p>
                    <a href="portofolio" class="mt-4 inline-block text-yellow-600 font-semibold hover:underline">
                        Baca Selengkapnya →
                    </a>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <img src="fotokatar4.jpg" alt="Blog 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-yellow-500 font-medium uppercase">Kegiatan</span>
                    <h3 class="text-lg font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
                        Artikel Kedua Blog
                    </h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Tulisan kedua bisa menjelaskan kegiatan terbaru atau pengalaman tim SDA Muda.
                    </p>
                    <a href="#" class="mt-4 inline-block text-yellow-600 font-semibold hover:underline">
                        Baca Selengkapnya →
                    </a>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <img src="fotokatar5.jpg" alt="Blog 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-yellow-500 font-medium uppercase">Inspirasi</span>
                    <h3 class="text-lg font-bold mt-2 text-gray-800 hover:text-yellow-600 transition">
                        Artikel Ketiga Blog
                    </h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Artikel ini bisa berisi inspirasi, wawasan, atau cerita dari anggota SDA Muda.
                    </p>
                    <a href="#" class="mt-4 inline-block text-yellow-600 font-semibold hover:underline">
                        Baca Selengkapnya →
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

<section class="py-10 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    
    <!-- Judul di luar card -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-yellow-400 pl-3">
      Info Kegiatan - Karang Taruna RW.008
    </h2>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="logokatar.png" alt="Event 1" class="w-full">
        <div class="p-4">
          <p class="text-gray-700 font-bold mt-1">NANTI KITA CERITA TENTANG KULIT</p>
          <button onclick="toggleDetail('detail1')" 
                  class="w-full flex items-center justify-between mt-3 bg-gray-100 rounded-lg px-3 py-2 text-sm font-medium text-gray-700">
            Detail
            <span>▼</span>
          </button>
          <div id="detail1" class="hidden mt-3 text-sm text-gray-600">
            <p><strong>Topik:</strong> Dampak UV, Perawatan Kulit, Pencegahan Kanker.</p>
            <p><strong>Hari/Tanggal:</strong> Sabtu, 23 Desember 2023</p>
            <p><strong>Lokasi:</strong> Ruang Serba Guna SDA</p>
          </div>
          <div class="mt-4">
            <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg">
              ADMIN 1
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="logokatar.png" alt="Event 2" class="w-full">
        <div class="p-4">
          <p class="text-gray-700 font-bold mt-1">MENGENAL POLA HIDUP SEHAT</p>
          <button onclick="toggleDetail('detail2')" 
                  class="w-full flex items-center justify-between mt-3 bg-gray-100 rounded-lg px-3 py-2 text-sm font-medium text-gray-700">
            Detail
            <span>▼</span>
          </button>
          <div id="detail2" class="hidden mt-3 text-sm text-gray-600">
            <p><strong>Topik:</strong> Nutrisi, Olahraga, Pola Tidur.</p>
            <p><strong>Hari/Tanggal:</strong> Minggu, 7 Januari 2024</p>
            <p><strong>Lokasi:</strong> Aula PUPR</p>
          </div>
          <div class="mt-4">
            <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg">
              ADMIN 2
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="logokatar.png" alt="Event 3" class="w-full">
        <div class="p-4">
          <p class="text-gray-700 font-bold mt-1">TEKNOLOGI AIR UNTUK MASA DEPAN</p>
          <button onclick="toggleDetail('detail3')" 
                  class="w-full flex items-center justify-between mt-3 bg-gray-100 rounded-lg px-3 py-2 text-sm font-medium text-gray-700">
            Detail
            <span>▼</span>
          </button>
          <div id="detail3" class="hidden mt-3 text-sm text-gray-600">
            <p><strong>Topik:</strong> Inovasi Pengolahan Air, Konservasi, Energi Hijau.</p>
            <p><strong>Hari/Tanggal:</strong> Sabtu, 20 Januari 2024</p>
            <p><strong>Lokasi:</strong> Ditjen SDA</p>
          </div>
          <div class="mt-4">
            <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg">
              ADMIN 3
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<script>
  function toggleDetail(id) {
    const el = document.getElementById(id);
    el.classList.toggle("hidden");
  }
</script>

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
