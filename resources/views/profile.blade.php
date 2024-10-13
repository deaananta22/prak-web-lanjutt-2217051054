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
        <img src="/asset/images/pp_dea.jpg" class="profile-img">
        <div class="info">
            <h1 class="label">{{ $nama}}</h1>
            <h1 class="label">{{ $npm }}</h1>
            <h1 class="label">{{ $nama_kelas }}</h1>
        </div>
    </div>
    @endsection