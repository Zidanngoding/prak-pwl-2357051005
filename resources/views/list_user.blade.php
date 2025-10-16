@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="fw-bold text-pink mb-4">🌸 Daftar Pengguna 🌸</h1>

    <a href="{{ route('user.create') }}" class="btn btn-success mb-3 rounded-pill px-4 fw-bold shadow">
        ➕ Tambah User
    </a>

    <table class="table table-bordered table-striped align-middle text-center shadow-sm rounded">
        <thead style="background-color:#ff91a4; color:white;">
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}"
                           class="btn btn-warning btn-sm rounded-pill fw-bold px-3 shadow-sm me-2">
                           ✏️ Edit
                        </a>

                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger btn-sm rounded-pill fw-bold px-3 shadow-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini? 🥺')">
                                    🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- 🔔 Popup SweetAlert2 untuk Notifikasi --}}
@if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Berhasil! 🎉',
                text: "{{ session('success') }}",
                icon: 'success',
                showConfirmButton: false,
                timer: 2000, // popup ilang otomatis setelah 2 detik
                timerProgressBar: true,
                background: '#fff0f5',
                color: '#d63384',
                toast: true,
                position: 'top-end'
            });
        });
    </script>
@endif
@endsection
