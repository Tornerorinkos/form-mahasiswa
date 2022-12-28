@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>

<table class="table table-responsive">
    <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Aksi</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->nim }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection