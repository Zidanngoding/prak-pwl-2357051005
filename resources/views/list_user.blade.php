@extends('layouts.app')

@section('content')
<div class="card shadow-lg border-0 p-4" style="width: 90%; max-width: 900px; background: linear-gradient(135deg, #fbc2eb, #a6c1ee); color: #fff;">
    <h2 class="text-center mb-4 fw-bold">🌸 Daftar Pengguna 🌸</h2>

    <table class="table table-hover align-middle text-center bg-white rounded-4 overflow-hidden shadow-sm">
        <thead style="background-color: #ff8fab; color: white;">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody style="color: #555;">
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
