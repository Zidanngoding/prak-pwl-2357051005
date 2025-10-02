@extends('layouts.app')

@section('content')
<div class="card shadow-lg border-0 p-5 text-center" style="max-width: 600px; width: 100%; background: linear-gradient(135deg, #ffb6c1, #ff91a4); color: white;">
    <h2 class="fw-bold mb-4">🌸 Tambah Pengguna Baru 🌸</h2>

    <form action="{{ route('user.store') }}" method="POST" class="text-start">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label fw-semibold">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control rounded-pill p-3 border-0" placeholder="Masukkan nama kamu..." required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label fw-semibold">NPM</label>
            <input type="text" id="npm" name="npm" class="form-control rounded-pill p-3 border-0" placeholder="Masukkan NPM kamu..." required>
        </div>

        <div class="mb-4">
            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
            <select id="kelas_id" name="kelas_id" class="form-select rounded-pill p-3 border-0" required>
                <option value="" hidden>-- Pilih kelas kamu --</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-light fw-bold px-5 py-2 rounded-pill shadow">
            💾 Simpan
        </button>
    </form>
</div>
@endsection
