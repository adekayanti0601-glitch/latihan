<!DOCTYPE html>
<html>
<head>
    <title>Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4>Form Aspirasi</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="/aspirasi">
                @csrf

                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
                <input type="text" name="nim" class="form-control mb-2" placeholder="NIM">

                <select name="kategori" class="form-control mb-2">
                    <option>Akademik</option>
                    <option>Fasilitas</option>
                    <option>Lainnya</option>
                </select>

                <textarea name="aspirasi" class="form-control mb-2" placeholder="Aspirasi"></textarea>

                <button class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>