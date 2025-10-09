<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan daftar 
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];

        return view('list_mk', $data);
    }

    // Menampilkan form input untuk tambah data
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer',
        ]);

        // Simpan ke tabel mata_kuliah
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        // Redirect ke halaman daftar mata kuliah
        return redirect()->to('/matakuliah')->with('success', 'Data berhasil ditambahkan!');
    }
}
