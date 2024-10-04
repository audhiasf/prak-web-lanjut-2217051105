@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">LIST USER</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped w-60">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection