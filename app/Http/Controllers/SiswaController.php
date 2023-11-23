<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        // Menampilkan daftar siswa
        $siswa = Siswa::all();
        return view('siswa', compact('siswa'));
    }
    
    public function create()
    {
        // Menampilkan formulir tambah siswa
        return view('siswacreate');
    }
    
    public function store(Request $request)
    {
        $messages = [
            "unique" => "Maaf NIS Sudah Ada"
        ];
        // Menyimpan data siswa baru
        $data = $request->validate([
            'nama' => 'required|max:50',
            'nis' => 'required|unique:siswa_tabel,nis|max:20',
            'jk' => 'required|max:20',
            'no_tlp' => 'required|max:20',
            'alamat' => 'required|max:200',
            'tanggal_lahir' => 'required|date',
            'Tempat_lahir' => 'required|max:20',
        ], $messages);
    
        Siswa::create($data);
    
        return redirect('/siswa');
    }
    
    public function show(Siswa $siswa)
    {
        // Menampilkan detail siswa
        return view('siswadetail', compact('siswa'));
    }
    
    public function edit(Siswa $siswa)
    {
        // Menampilkan formulir edit siswa
        return view('siswaedit', compact('siswa'));
    }
    
    public function update(Request $request, Siswa $siswa)
    {
        $messages = [
            "unique" => "Maaf NIS Sudah Ada"
        ];
        // Memperbarui data siswa
        $data = $request->validate([
            'nama' => 'required|max:50',
            'nis' => 'required|unique:siswa_tabel,nis,' . $siswa->id . ',id|max:20',
            'jk' => 'required|max:20',
            'no_tlp' => 'required|max:20',
            'alamat' => 'required|max:200',
            'tanggal_lahir' => 'required|date',
            'Tempat_lahir' => 'required|max:20',
        ],  $messages);
    
        $siswa->update($data);
    
        return redirect('/siswa/' . $siswa->id);
    }
    
    public function destroy(Siswa $siswa){
        Siswa::destroy($siswa->id);
        return back();
    }
}
