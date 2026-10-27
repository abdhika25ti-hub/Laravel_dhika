<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portofolio Model</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold text-primary">Tambah Data Portofolio</h5>
                    </div>
                    <div class="card-body p-4">

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"
                                    placeholder="Contoh: Febrian Alfito" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label fw-bold">Profil Pribadi</label>
                                <textarea class="form-control" name="profil_pribadi" rows="4"
                                    placeholder="Tuliskan gambaran singkat tentang diri Anda..." required>{{ old('profil_pribadi') }}</textarea>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Kontak (HP/Email)</label>
                                    <input type="text" class="form-control" name="kontak"
                                        value="{{ old('kontak') }}" placeholder="0812-xxxx-xxxx / email@gmail.com"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"
                                        value="{{ old('alamat') }}" placeholder="Kota / Alamat lengkap" required>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label fw-bold">Keahlian</label>
                                <input type="text" class="form-control" name="keahlian" value="{{ old('keahlian') }}"
                                    placeholder="Contoh: Modeling, Blender 3D, Character Design" required>
                            </div>


                            <div class="mb-4">
                                <label class="form-label fw-bold">Riwayat Pendidikan</label>
                                <textarea class="form-control" name="riwayat_pendidikan" rows="4"
                                    placeholder="Contoh:&#10;2018 - 2021: MTs Mdu (Bekasi)&#10;2021 - Sekarang: SMKN 11 Semarang (Animasi)" required>{{ old('riwayat_pendidikan') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Foto Profil</label>
                                <input type="file" class="form-control" name="foto" accept="image/*">
                            </div>

                           
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('portofolio.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
