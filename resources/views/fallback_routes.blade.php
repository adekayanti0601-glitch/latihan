<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .animate-bounce-slow {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-lg w-full text-center">
            <div class="mb-8 flex justify-center">
                <div class="animate-bounce-slow bg-white p-6 rounded-full shadow-2xl border border-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <h1 class="text-9xl font-extrabold text-indigo-600 mb-4 tracking-tighter">404</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ups! Linknya Putus...</h2>
            <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                Halaman yang kamu cari sepertinya tidak ada di folder ini atau mungkin kamu salah mengetik alamatnya.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/') }}" 
                   class="w-full sm:w-auto px-10 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-xl shadow-indigo-200 transition duration-300 transform hover:-translate-y-1">
                    Balik ke Beranda
                </a>
                <button onclick="window.history.back()" 
                   class="w-full sm:w-auto px-10 py-4 bg-white border-2 border-gray-200 text-gray-700 font-bold rounded-2xl hover:bg-gray-50 transition duration-300">
                    Halaman Sebelumnya
                </button>
            </div>

            <p class="mt-16 text-gray-400 text-sm italic">
                Sistem Informatika &copy; 2026
            </p>
        </div>
    </div>

</body>
</html>