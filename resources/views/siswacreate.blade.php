<!DOCTYPE html>
<html>
    @include('pesan')
<head>
    <!-- Add a reference to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Tambah Siswa Baru</h1>

    <form method="POST" action="{{ route('siswa.store') }}" id="formTambahSiswa">
        @csrf

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" value="{{ old('nama') }}" name="nama" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" class="form-control" name="nis" required>
            @error("nis")
                <p style = "color : red ">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>   
            <select class="form-control"  value="{{ old('jk') }}" name="jk" required>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_tlp">No. Telepon:</label>
            <input type="text" class="form-control"  value="{{ old('no_tlp') }}" name="no_tlp" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" required>{{ old('alamat') }}</textarea>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control"  value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="Tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control"  value="{{ old('Tempat_lahir') }}" name="Tempat_lahir" required>
        </div>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#konfirmasiSimpanModal">
            Simpan
        </button>
    </form>

    <a href="{{ route('siswa') }}" class="btn btn-secondary mt-2">Kembali ke Daftar Siswa</a>
</div>

<!-- Bootstrap Modal for Simpan Confirmation -->
<div class="modal" id="konfirmasiSimpanModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Simpan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                Apakah Anda yakin ingin menyimpan data siswa ini?
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="document.getElementById('formTambahSiswa').submit();">Ya, Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>

        </div>
    </div>
</div>

<!-- Add a reference to Bootstrap JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
