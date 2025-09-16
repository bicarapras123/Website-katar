<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal - Website Katar 008</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-white">

<!-- Header -->
<header class="sticky top-0 left-0 w-full z-50 bg-[#0b0d2a] shadow-md">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <div class="flex items-center gap-2">
      <img src="{{ asset('logokatar.png') }}" alt="Logo" class="h-12">
      <span class="font-bold text-xl text-white">KARANG TARUNA RW.008</span>
    </div>
    <nav class="flex items-center gap-6 text-sm uppercase font-semibold tracking-wide text-white">
      <a href="{{ url('/') }}" class="hover:text-yellow-400 {{ Request::is('/') ? 'text-yellow-400' : 'text-white' }}">Beranda</a>
      <a href="{{ url('/portofolio') }}" class="hover:text-yellow-400 {{ Request::is('portofolio') ? 'text-yellow-400' : 'text-white' }}">Portof</a>
      <a href="{{ url('/struktur') }}" class="hover:text-yellow-400 {{ Request::is('struktur') ? 'text-yellow-400' : 'text-white' }}">Struktur</a>
      <a href="{{ url('/layanan') }}" class="hover:text-yellow-400 {{ Request::is('layanan') ? 'text-yellow-400' : 'text-white' }}">Layanan</a>
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

<!-- Konten -->
<section class="py-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 px-6">
    
    <!-- Kiri: Info Kontak -->
    <div class="bg-white shadow-2xl rounded-2xl p-8">
      <h2 class="text-4xl font-bold text-gray-800 mb-2">Get in touch</h2>
      <p class="text-gray-500 mb-6">With us!</p>

      <h3 class="font-semibold text-gray-700 mb-4">Contact :</h3>
      <ul class="space-y-4">
        <li class="flex items-center gap-3"><span class="bg-yellow-400 p-2 rounded-full text-white">📞</span><span class="text-gray-700">Faza : +62 857-2942-3611</span></li>
        <li class="flex items-center gap-3"><span class="bg-green-500 p-2 rounded-full text-white">💬</span><span class="text-gray-700">WhatsApp : +62 857-2942-3611</span></li>
        <li class="flex items-center gap-3"><span class="bg-red-500 p-2 rounded-full text-white">✉️</span><span class="text-gray-700">Email : Sdamudjaya@gmail.com</span></li>
      </ul>

      <!-- Google Maps -->
      <div class="mt-20 rounded-xl overflow-hidden shadow-2xl">
      <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1758005834419!5m2!1sid!2sid!6m8!1m7!1sK6Bk-kA96JWCSmvLH1GDSA!2m2!1d-6.188511663911896!2d106.7901814487078!3f252.98793755586377!4f2.161904232222142!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Kanan: Form -->
    <div class="bg-white shadow-2xl rounded-2xl p-8">
      <h3 class="text-2xl font-semibold text-gray-800 mb-6">Tinggalkan Pesan Disini !</h3>

      <!-- Form -->
      <form id="contactForm" action="{{ route('layanans.store') }}" method="POST" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="nama" placeholder="Nama" required
            class="w-full px-4 py-3 rounded-full bg-gray-100 text-blue-600 placeholder-gray-400 focus:ring-2 focus:ring-blue-400">

          <input type="email" name="email" placeholder="E-mail" required
            class="w-full px-4 py-3 rounded-full bg-gray-100 text-blue-600 placeholder-gray-400 focus:ring-2 focus:ring-blue-400">
        </div>

        <input type="text" name="no_hp" placeholder="Nomor HP" required
          class="w-full px-4 py-3 rounded-full bg-gray-100 text-blue-600 placeholder-gray-400 focus:ring-2 focus:ring-blue-400">

        <input type="text" name="alamat" placeholder="Alamat" required
          class="w-full px-4 py-3 rounded-full bg-gray-100 text-blue-600 placeholder-gray-400 focus:ring-2 focus:ring-blue-400">

        <textarea name="pesan" placeholder="Pesan" rows="5" required
          class="w-full px-4 py-3 rounded-2xl bg-gray-100 text-blue-600 placeholder-gray-400 focus:ring-2 focus:ring-blue-400"></textarea>

        <!-- Cart Penjelasan (masuk ke dalam form) -->
        <div class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 text-blue-800 rounded-xl shadow-lg p-6 flex items-start gap-4">
          <div class="flex-shrink-0 bg-blue-500 text-white p-3 rounded-full shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4H3m9 16V4m0 16v-4m0 4v-4"/>
            </svg>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Informasi Penting</h4>
            <p class="text-sm mt-1 leading-relaxed">
              Pesan Anda akan kami <span class="font-semibold">kelola</span> dengan baik 
              dan ditindaklanjuti dalam <span class="font-semibold">jangka waktu secepatnya</span>.  
              Terima kasih atas kepercayaan Anda.
            </p>
          </div>
        </div>

        <!-- Tombol buka popup -->
        <button type="button" onclick="openConfirm()"
          class="w-full py-3 rounded-full bg-blue-500 text-white font-semibold hover:bg-blue-600 transition">
          Kirim Pesan
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Popup Konfirmasi -->
<div id="confirmPopup" class="fixed inset-0 hidden z-50 bg-black bg-opacity-40 flex items-center justify-center">
  <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center animate-fadeIn">
    <h3 class="text-xl font-bold text-gray-800 mb-2">Apakah Anda Yakin?</h3>
    <p class="text-gray-600 text-sm mb-6">Pastikan pesan yang Anda masukkan untuk kami sudah benar sebelum dikirim.</p>
    <div class="flex gap-4 justify-center">
      <button onclick="sendMessage()" class="px-6 py-2 bg-blue-500 text-white rounded-full font-semibold hover:bg-blue-600 transition">Yakin & Kirim</button>
      <button onclick="closeConfirm()" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-full font-semibold hover:bg-gray-400 transition">Batal</button>
    </div>
  </div>
</div>

<!-- Popup Sukses -->
<div id="successPopup" class="fixed inset-0 hidden z-50 bg-black bg-opacity-40 flex items-center justify-center">
  <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center animate-fadeIn">
    <div class="mx-auto bg-blue-500 w-16 h-16 flex items-center justify-center rounded-full text-white mb-4">✔</div>
    <h3 class="text-xl font-bold text-gray-800 mb-2">Pesan Berhasil Dikirim!</h3>
    <p class="text-gray-600 text-sm mb-6">Terima kasih atas pesan Anda. Kami akan segera menindaklanjuti.</p>
    <button onclick="closeSuccess()" class="px-6 py-2 bg-blue-500 text-white rounded-full font-semibold hover:bg-blue-600 transition">Tutup</button>
  </div>
</div>

<!-- Animasi -->
<style>
@keyframes fadeIn { from { opacity: 0; transform: translateY(-10px);} to { opacity: 1; transform: translateY(0);} }
.animate-fadeIn { animation: fadeIn 0.3s ease-out; }
</style>

<script>
  function openConfirm() {
    document.getElementById("confirmPopup").classList.remove("hidden");
  }

  function closeConfirm() {
    document.getElementById("confirmPopup").classList.add("hidden");
  }

  function sendMessage() {
    document.getElementById("contactForm").submit();
  }

  function closeSuccess() {
    document.getElementById("successPopup").classList.add("hidden");
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

