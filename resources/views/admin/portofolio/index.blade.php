<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Portofolio Model</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold text-primary">Data Portofolio Model</h5>
            <a href="{{ route('portofolio.create') }}" class="btn btn-primary btn-sm">+ Tambah Data</a>
        </div>
        <div class="card-body p-0">

            @if(session('success'))
                <div class="alert alert-success m-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-3">No</th>
                            <th>Nama</th>
                            <th>Kontak & Alamat</th>
                            <th>Keahlian</th>
                            <th>Profil Ringkas</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($portofolio as $index => $item)
                            <tr>
                                <td class="ps-3">{{ $index + 1 }}</td>
                                <td class="fw-bold">{{ $item->nama }}</td>
                                <td>
                                    <small class="d-block text-muted">{{ $item->kontak }}</small>
                                    <small class="d-block text-muted"> {{ Str::limit($item->alamat, 20) }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $item->keahlian }}</span>
                                </td>
                                <td>
                                    <small class="text-muted">{{ Str::limit($item->profil_pribadi, 40) }}</small>
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('portofolio.destroy', $item->portofolio_id) }}" method="POST">
                                        <!-- Tombol Tampil CV Poster -->
                                        <a href="{{ route('portofolio.show', $item->portofolio_id) }}" class="btn btn-sm btn-info text-white">Lihat CV</a>

                                        <!-- Tombol Edit Data -->
                                        <a href="{{ route('portofolio.edit', $item->portofolio_id) }}" class="btn btn-sm btn-warning">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada data portofolio.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
