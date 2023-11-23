<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa_tabel'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'nama',
        'nis',
        'jk',
        'no_tlp',
        'alamat',
        'tanggal_lahir',
        'Tempat_lahir',
    ];
}
