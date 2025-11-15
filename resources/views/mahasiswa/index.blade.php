<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }

        .profile-wrapper {
            max-width: 1100px;
        }

        .profile-photo {
            width: 250px;
            height: 330px;
            object-fit: cover;
            border: 1px solid #ddd;
        }

        .info-label {
            font-weight: 600;
            width: 200px;
        }

        .info-row {
            padding: 3px 0;
            border-bottom: 1px solid #f2f2f2;
        }

        h1 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container mt-4 profile-wrapper">

    <h1>Profil Mahasiswa</h1>

    <div class="row">
        <div class="col-md-9">

            <div class="info-row d-flex">
                <div class="info-label">Status Akhir</div>
                <div class="grow text-success fw-bold">{{ $mhs->status_akhir }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Angkatan</div>
                <div class="grow fw-bold">{{ $mhs->angkatan }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Tanggal Masuk / Inagurasi</div>
                <div class="grow fw-bold">
                    {{ \Carbon\Carbon::parse($mhs->tanggal_masuk)->translatedFormat('d M Y') }}
                </div>
            </div>


            <div class="info-row d-flex">
                <div class="info-label">User Name</div>
                <div class="grow fw-bold">{{ $mhs->user_name }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Email Akademik</div>
                <div class="grow fw-bold">{{ $mhs->email_akademik }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Program Studi</div>
                <div class="grow fw-bold">{{ $mhs->program_studi }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Kelas</div>
                <div class="grow fw-bold">{{ $mhs->kelas }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Wali Mahasiswa</div>
                <div class="grow fw-bold">{{ $mhs->wali_mahasiswa }}</div>
            </div>

            <div class="info-row d-flex">
                <div class="info-label">Jalur Usm</div>
                <div class="grow fw-bold">{{ $mhs->jalur_usm }}</div>
            </div>

        </div>

        <!-- FOTO DI SISI KANAN -->
        <div class="col-md-3 text-center">
            <img src="{{ asset($mhs->foto) }}"
                 alt="Foto {{ $mhs->user_name }}"
                 class="profile-photo">
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
