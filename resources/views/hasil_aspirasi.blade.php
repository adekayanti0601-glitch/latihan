<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI';
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        .card {
            border-radius: 15px;
        }
        .label {
            font-weight: 600;
            color: #555;
        }
        .value {
            font-size: 16px;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="card shadow-lg">

        <!-- HEADER -->
        <div class="card-header text-center text-white" style="background: #17a2b8;">
            <h3>💬 Aspirasi Berhasil Dikirim</h3>
        </div>

        <!-- BODY -->
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-4 label">Nama</div>
                <div class="col-8 value">{{ $data['nama'] }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-4 label">NIM</div>
                <div class="col-8 value">{{ $data['nim'] }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-4 label">Kategori</div>
                <div class="col-8 value">{{ $data['kategori'] }}</div>
            </div>

            <div class="mb-3">
                <div class="label">Aspirasi</div>
                <div class="alert alert-light border">
                    {{ $data['aspirasi'] }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4 label">Waktu</div>
                <div class="col-8 value">{{ $data['waktu'] }}</div>
            </div>

            <!-- BUTTON -->
            <a href="/aspirasi" class="btn btn-primary w-100">⬅️ Kembali ke Form</a>

        </div>
    </div>
</div>

</body>
</html>