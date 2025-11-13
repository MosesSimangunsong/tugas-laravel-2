<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sedikit style tambahan agar mirip gambar */
        .profile-card { max-width: 900px; }
        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .info-label { font-size: 0.9rem; color: #6c757d; }
        .info-value { font-size: 1.1rem; font-weight: 500; }
        .info-list dt { font-weight: normal; color: #6c757d; }
        .info-list dd { font-weight: bold; }
    </style>
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm border-0 profile-card mx-auto">
        <div class="card-body p-4 p-md-5">
            <div class="row g-4">
                <div class="col-md-4 text-center text-md-start">
                    <img src="{{ asset($mhs->foto) }}" alt="Foto {{ $mhs->user_name }}" class="img-fluid rounded-circle profile-pic mb-3">
                    
                    <dl class="row info-list text-md-start text-center">
                        <dt class="col-6 col-md-12">Status Akhir</dt>
                        <dd class="col-6 col-md-12 text-success">{{ $mhs->status_akhir }}</dd>

                        <dt class="col-6 col-md-12 mt-2">Angkatan</dt>
                        <dd class="col-6 col-md-12">{{ $mhs->angkatan }}</dd>

                        <dt class="col-6 col-md-12 mt-2">Tanggal Masuk</dt>
                        <dd class="col-6 col-md-12">{{ \Carbon\Carbon::parse($mhs->tanggal_masuk)->translatedFormat('d M Y') }}</dd>
                    </dl>
                </div>

                <div class="col-md-8">
                    <div class="mb-3">
                        <span class="info-label">NIM</span>
                        <h2 class="info-value mb-0">{{ $mhs->nim }}</h2>
                    </div>
                    <div class="mb-3">
                        <span class="info-label">User Name</span>
                        <h2 class="info-value mb-0">{{ $mhs->user_name }}</h2>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="mb-2">
                        <span class="info-label">Email Akademik</span>
                        <p class="info-value">{{ $mhs->email_akademik }}</p>
                    </div>
                    <div class="mb-2">
                        <span class="info-label">Program studi</span>
                        <p class="info-value">{{ $mhs->program_studi }}</p>
                    </div>
                    <div class="mb-2">
                        <span class="info-label">Kelas</span>
                        <p class="info-value">{{ $mhs->kelas }}</p>
                    </div>
                    <div class="mb-2">
                        <span class="info-label">Wali Mahasiswa</span>
                        <p class="info-value">{{ $mhs->wali_mahasiswa }}</p>
                    </div>
                    <div class="mb-2">
                        <span class="info-label">Jalur USM</span>
                        <p class="info-value">{{ $mhs->jalur_usm }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>