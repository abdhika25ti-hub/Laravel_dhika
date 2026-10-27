<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Portofolio - {{ $portofolio->nama }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .cv-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
        }

        .cv-sidebar {
            background: #e9ecef;
            border-right: 1px solid #dee2e6;
        }

        .avatar-box {
            width: 140px;
            height: 140px;
            background: #6c757d;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 48px;
            font-weight: bold;
        }
    </style>
</head>

<body class="py-5">

    <div class="container">

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('portofolio.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali ke Tabel
            </a>

        </div>

        <!-- Layout Poster CV -->
        <div class="card cv-card shadow-lg border-0">
            <div class="row g-0">


                <div class="col-md-4 cv-sidebar p-4">
                    <div class="text-center mb-4">
                        @if ($portofolio->foto)
                            <img src="{{ asset('storage/' . $portofolio->foto) }}" alt="{{ $portofolio->nama }}"
                                class="rounded-circle shadow-sm mb-3"
                                style="width: 140px; height: 140px; object-fit: cover;">
                        @else
                            <div class="avatar-box shadow-sm mb-3">
                                {{ strtoupper(substr($portofolio->nama, 0, 1)) }}
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-uppercase border-bottom pb-2 text-dark">Profil Pribadi</h6>
                        <p class="text-secondary small style-text" style="white-space: pre-line;">
                            {{ $portofolio->profil_pribadi }}</p>
                    </div>

                    <div>
                        <h6 class="fw-bold text-uppercase border-bottom pb-2 text-dark">Kontak & Alamat</h6>
                        <ul class="list-unstyled small text-secondary mb-0">
                            <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-primary"></i>
                                {{ $portofolio->kontak }}</li>
                            <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>
                                {{ $portofolio->alamat }}</li>
                        </ul>
                    </div>
                </div>

                
                <div class="col-md-8 p-4 p-md-5">
                    <div class="mb-4">
                        <h2 class="fw-bold text-dark text-uppercase mb-1">{{ $portofolio->nama }}</h2>
                        <span class="badge bg-secondary text-uppercase px-3 py-2">Modeling / 3D Artist</span>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-uppercase border-bottom pb-2 text-dark">Keahlian</h5>
                        <div class="d-flex flex-wrap gap-2 pt-1">
                            @foreach (explode(',', $portofolio->keahlian) as $skill)
                                <span
                                    class="badge bg-light text-dark border px-3 py-2 shadow-sm fs-6">{{ trim($skill) }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h5 class="fw-bold text-uppercase border-bottom pb-2 text-dark">Riwayat Pendidikan</h5>
                        <div class="text-secondary style-text pt-1" style="white-space: pre-line;">
                            {{ $portofolio->riwayat_pendidikan }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
