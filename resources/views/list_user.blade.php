@extends('layouts.app')

@section('content')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center mb-4">LIST USER</h1>
    <hr>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover w-100">
            <thead class="text-center" style="background-color: #55679C; color:white;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center" style="background-color: #F2F4F7;">
                @foreach($users as $user)
                <tr>
                    <td class="text-nowrap">{{ $user->id }}</td>
                    <td class="text-nowrap">{{ $user->nama }}</td>
                    <td class="text-nowrap">{{ $user->npm }}</td>
                    <td class="text-nowrap">{{ $user->nama_kelas }}</td>
                    <td>
                        <!-- Menampilkan Foto -->
                        @if ($user->foto)
                            <img src="{{ asset('storage/uploads/'. $user->foto) }}" alt="Profile Image" style="object-fit: cover; border-radius: 50%;" width="50" height="50">
                        @else
                            <img src="{{ asset('assets/img/profile.png') }}" alt="Default Profile Image" style="object-fit: cover; border-radius: 50%;" width="50" height="50">
                        @endif
                    </td>
                    <td>
                        <!-- Menggunakan Flexbox agar tombol dalam satu baris -->
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm me-1">Detail</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-secondary btn-sm me-1">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
