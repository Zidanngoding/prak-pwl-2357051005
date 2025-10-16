@extends('layouts.app')

@section('content')
<div class="card shadow-lg border-0 p-5 text-center"
     style="max-width: 600px; width: 100%; background: linear-gradient(135deg, #ffb6c1, #ff91a4); color: white;">
    <h2 class="fw-bold mb-4">🌸 Edit Pengguna 🌸</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST" class="text-start">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label fw-semibold">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control rounded-pill p-3 border-0"
                   value="{{ $user->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label fw-semibold">NPM</label>
            <input type="text" id="npm" name="npm" class="form-control rounded-pill p-3 border-0"
                   value="{{ $user->nim }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold d-block mb-2">Kelas</label>
            <div class="bg-light text-dark p-3 rounded-4">
                @foreach ($kelas as $kelasItem)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="kelas_id"
                               id="kelas{{ $kelasItem->id }}"
                               value="{{ $kelasItem->id }}"
                               {{ $user->kelas_id == $kelasItem->id ? 'checked' : '' }} required>
                        <label class="form-check-label fw-semibold" for="kelas{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-light fw-bold px-5 py-2 rounded-pill shadow">
            💾 Update
        </button>
    </form>
</div>
@endsection
