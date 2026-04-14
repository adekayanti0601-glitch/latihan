<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan Mahasiswa Informatika</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset("images/hero-informatika.jpg") }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <nav class="bg-blue-900 text-white p-4 sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold tracking-wider">HM-INFORMATIKA</h1>
            <div class="space-x-6">
                <a href="#home" class="hover:text-blue-300">Home</a>
                <a href="#visi-misi" class="hover:text-blue-300">Visi & Misi</a>
                <a href="#departemen" class="hover:text-blue-300">Departemen</a>
            </div>
        </div>
    </nav>

    <header id="home" class="hero-bg h-screen flex items-center justify-center text-center text-white">
        <div>
            <h2 class="text-5xl font-extrabold mb-4">Satu Rasa, Satu Informatika</h2>
            <p class="text-xl italic">Wadah Kolaborasi dan Inovasi Mahasiswa Teknik Informatika</p>
        </div>
    </header>

    <section id="visi-misi" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12 border-b-4 border-blue-900 inline-block">Visi & Misi</h2>
            
            <div class="grid md:grid-cols-2 gap-12 mt-8 text-left">
                <div class="bg-blue-50 p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Visi</h3>
                    <p class="leading-relaxed">
                        Menjadikan Program Studi Informatika yang bereputasi dan bermartabat di bidang Informatika.
                    </p>
                </div>
                <div class="bg-blue-50 p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Misi</h3>
                    <ul class="list-disc ml-5 space-y-2">
                        <li>Melaksanakan regenerasi yang bereputasi dan bermartabat untuk menghasilkan estafet kepengurusan.</li>
                        <li>Menyelenggarakan penelitian di bidang informatika yang bermanfaat bagi industri dan berkontribusi nyata dalam pengembangan ilmu pengetahuan.</li>
                        <li>Melakukan pengebdian kepada masyarakat di bidang informatika yang berkontribusi nyata untuk kemajuan masyarakat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="departemen" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold border-b-4 border-blue-900 inline-block">Struktur Organisasi</h2>
                <p class="mt-4 text-gray-600">Mengenal lebih dekat bagian dari keluarga kami</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/inf1.jpg') }}" alt="Foto Departemen Media" class="h-full w-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Departemen Media & Informasi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Departemen yang berperan sebagai "wajah" organisasi. Bertanggung jawab dalam mengelola komunikasi publik, konten kreatif visual, serta pengelolaan seluruh platform media sosial himpunan.
                    </p>
                    <div class="mt-6">
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full uppercase font-bold tracking-wider">Creative</span>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full uppercase font-bold tracking-wider">Broadcasting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-blue-900 text-white py-10 text-center">
        <p>&copy; 2026 Himpunan Mahasiswa Informatika. Built with Laravel 12.</p>
    </footer>

</body>
</html>`x