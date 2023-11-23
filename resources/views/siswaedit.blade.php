<!DOCTYPE html>
<html>
<head>
    <!-- Add a reference to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Edit Siswa</h1>

    <form method="POST" action="{{ route('siswa.update', $siswa) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}" required>
            @error("nis")
                <p style = "color : red ">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>
            <select class="form-control" name="jk" required>
                <option value="Pria" {{ $siswa->jk == 'Pria' ? 'selected' : '' }}>Pria</option>
                <option value="Wanita" {{ $siswa->jk == 'Wanita' ? 'selected' : '' }}>Wanita</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_tlp">No. Telepon:</label>
            <input type="text" class="form-control" name="no_tlp" value="{{ $siswa->no_tlp }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" required>{{ $siswa->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>
        </div>

        <div class="form-group">
            <label for="Tempat_lahir">Tempat_lahir:</label>
            <input type="text" class="form-control" name="Tempat_lahir" value="{{ $siswa->Tempat_lahir }}" required>
        </div>

        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#konfirmasiModal">
            Simpan Perubahan
        </button>
    

        <a href="{{ route('siswa') }}" class="btn btn-secondary">Kembali ke Daftar Siswa</a>

        <!-- Modal -->
        <div class="modal" id="konfirmasiModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Perubahan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        Apakah Anda yakin ingin menyimpan perubahan ini?
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ya, Simpan Perubahan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<!-- Add a reference to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
