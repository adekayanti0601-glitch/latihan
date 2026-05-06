<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI';
            background: linear-gradient(to right, #4facfe, #00f2fe);
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
        <div class="card-header text-center text-white" style="background: #28a745;">
            <h3>✅ Pendaftaran Berhasil</h3>
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
                <div class="col-4 label">Departemen</div>
                <div class="col-8 value">{{ $data['departemen'] }}</div>
            </div>

            <div class="mb-3">
                <div class="label">Alasan</div>
                <div class="alert alert-light border">
                    {{ $data['alasan'] }}
                </div>
            </div>

            <!-- BUTTON -->
            <a href="/daftar" class="btn btn-primary w-100">⬅️ Kembali ke Form</a>

        </div>
    </div>
</div>

</body>
</html>