@extends('layouts.app4')

@section('content')
<div>
        <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
    
    <!-- Isi Section -->
    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div>
            <img src="/asset/images/kiyowo.png"  class="logo">
        </div>
            <h1 class="text-center">Input Data</h1>
          
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                    placeholder="Nama anda">
            
                <label for="npm">NPM</label>
                <input type="text" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                    placeholder="NPM anda">

            <label for="kelas">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id">
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
                </select><br>
            
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto">
                @if ($user->foto)
                <img src="{{ Storage::url($user->foto) }}" class="profile-img" width="100">
                @endif
            
            <button type="submit" class="btn1">Submit</button>
            <a href="{{ route('user.list') }}" class="btn2">Kembali</a>
        </div>
    </form>

</div>


@endsection