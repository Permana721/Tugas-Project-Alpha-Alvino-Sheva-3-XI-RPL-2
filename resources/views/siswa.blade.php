<!DOCTYPE html>
<html>
<head>
    <!-- Tambahkan referensi ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>        

<!-- Import Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">

<div class="container">
    <h1>Daftar Siswa</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th class="aksi">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->no_tlp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->Tempat_lahir }}</td>
                    <td>
                        <a href="{{ route('siswadetail', $item) }}" class="btn btn-info">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('siswaedit', $item) }}" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                        <!-- Tombol hapus yang membuka modal konfirmasi -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#konfirmasiHapusModal{{ $item->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        <!-- Modal Konfirmasi Hapus -->
                        <div class="modal" id="konfirmasiHapusModal{{ $item->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data {{ $item->nama }} ini?
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <form action="{{ route('siswa.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Konfirmasi Hapus -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('siswacreate') }}" class="btn btn-success">Tambah Siswa Baru</a>
</div>

<!-- Add a reference to Bootstrap JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</body>
</html>
