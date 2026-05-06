<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Form Pendaftaran</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="/daftar">
                @csrf

                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
                <input type="text" name="nim" class="form-control mb-2" placeholder="NIM">

                <select name="departemen" class="form-control mb-2">
                    <option>Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Komputer</option>
                </select>

                <textarea name="alasan" class="form-control mb-2" placeholder="Alasan"></textarea>

                <button class="btn btn-success w-100">Daftar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>