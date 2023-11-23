<!DOCTYPE html>
<html>
<head>
    <!-- Tambahkan referensi ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Detail Siswa</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Nama:</strong> {{ $siswa->nama }}</p>
            <p class="card-text"><strong>NIS:</strong> {{ $siswa->nis }}</p>
            <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $siswa->jk }}</p>
            <p class="card-text"><strong>No. Telepon:</strong> {{ $siswa->no_tlp }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
            <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</p>
            <p class="card-text"><strong>Tempat Lahir:</strong> {{ $siswa->Tempat_lahir }}</p>
        </div>
    </div>

    <a href="{{ route('siswa') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Siswa</a>
</div>

<!-- Tambahkan referensi ke Bootstrap JavaScript dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
