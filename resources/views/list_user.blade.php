@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background: #f8f9fa;">
    <h2 class="mb-4">Daftar User</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user) 
            <tr>
                <td>{{ $user->id }}</td> 
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas}}</td>
                <td><a href="{{ route('users.show', $user->id) }}" class = "btn btn-warning mb-3">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection