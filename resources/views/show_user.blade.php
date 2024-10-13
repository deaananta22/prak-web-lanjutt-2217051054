@extends('layouts.app2')
@section('content')
    <div class="hearts">
        <div class="heart" style="left: 10%; top: 10%;"></div>
        <div class="heart" style="left: 30%; top: 20%;"></div>
        <div class="heart" style="right: 20%; top: 15%;"></div>
        <div class="heart" style="right: 10%; bottom: 20%;"></div>
        <div class="heart" style="left: 20%; bottom: 15%;"></div>
    </div>
    <div class="card">
        <img src="{{ Storage::url($user->foto) }}" class="profile-img">
        <div class="info">
            <h1 class="label">{{ $user->nama }} </h1>
            <h1 class="label">{{ $user->npm }}  </h1>
            <h1 class="label">{{ $nama_kelas  ?? 'Kelas tidak ditemukan' }}</h1>
        </div>
        <a href="{{ route('user.list') }}" class="btn3">Kembali ke List</a>
    </div>
    @endsection