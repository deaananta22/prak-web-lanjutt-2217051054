@extends('layouts.app3')
@section('content')

<div class="content-wrapper">
    <div class="logo-container">
        <img src="/asset/images/kiyowo.png" class="logo">
    </div>
    <div class="btn-container">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a></div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                         <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td><img src="{{ Storage::url($user->foto) }}" class="profile-img"></td>
                       <td>     <!-- View -->
                        <a href="{{ route('user.show', $user['id']) }}" class="view">View</a>

                        <!-- Edit -->
                        <a href="{{ route('user.edit', $user['id']) }}" class="edit">Edit</a>

                        <!-- Delete -->
                        <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection