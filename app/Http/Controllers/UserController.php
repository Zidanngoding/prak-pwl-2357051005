<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // 🔹 Tampilkan list user
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    // 🔹 Tampilkan form tambah user
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Tambah Pengguna Baru',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    // 🔹 Simpan user baru
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil ditambahkan!');
    }

    // 🔹 Tampilkan form edit
    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', [
            'title' => 'Edit Pengguna',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    // 🔹 Update data user
    public function update(Request $request, $id)
    {
        $user = $this->userModel->findOrFail($id);

        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    // 🔹 Hapus data user
    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil dihapus!');
    }
}
