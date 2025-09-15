<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Portal Katar 008</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Card Login -->
  <div class="bg-white shadow-2xl rounded-2xl w-full max-w-md p-8 animate-fadeIn relative z-10">
    <!-- Logo -->
    <div class="flex flex-col items-center mb-6">
      <img src="{{ asset('logokatar.png') }}" alt="Logo" class="w-20 h-20 mb-3">
      <h1 class="text-2xl font-bold text-gray-800">Karang Taruna RW.008</h1>
      <p class="text-gray-500 text-sm">Silakan login untuk melanjutkan</p>
    </div>

    <!-- Form -->
    <form id="loginForm" class="space-y-5">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" placeholder="Masukkan email"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-800">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" placeholder="Masukkan password"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-800">
      </div>

      <!-- Tombol Login -->
      <button type="submit"
              class="w-full py-3 rounded-xl bg-blue-500 text-white font-semibold hover:bg-blue-600 transition">
        Login
      </button>
    </form>

    <!-- Pesan Error -->
    <p id="errorMsg" class="text-red-500 text-sm mt-4 text-center hidden">
      Email atau password salah!
    </p>
  </div>

  <!-- Popup Modal -->
  <div id="successPopup" class="fixed inset-0 hidden bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center animate-fadeIn">
      <!-- Ikon SVG Premium -->
      <div class="mx-auto bg-blue-500 w-16 h-16 flex items-center justify-center rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <h3 class="text-xl font-bold text-gray-800 mb-2">Login Berhasil!</h3>
      <p class="text-gray-600 text-sm mb-6">Selamat datang di Portal Katar 008.</p>
      <button onclick="closeSuccess()"
              class="px-6 py-2 bg-blue-500 text-white rounded-full font-semibold hover:bg-blue-600 transition">
        Lanjut ke Dashboard
      </button>
    </div>
  </div>

  <!-- Animasi -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 0.5s ease-out;
    }
  </style>

  <!-- Script Validasi -->
  <script>
    const loginForm = document.getElementById("loginForm");
    const errorMsg = document.getElementById("errorMsg");
    const successPopup = document.getElementById("successPopup");

    // Email & password yang ditentukan
    const validEmail = "admin@katar008.com";
    const validPassword = "123456";

    loginForm.addEventListener("submit", function(e) {
      e.preventDefault();

      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      if (email === validEmail && password === validPassword) {
        errorMsg.classList.add("hidden");
        successPopup.classList.remove("hidden");
      } else {
        errorMsg.classList.remove("hidden");
      }
    });

    function closeSuccess() {
      successPopup.classList.add("hidden");
      window.location.href = "/dashboard"; // arahkan ke dashboard
    }
  </script>

</body>
</html>
