<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Form Registrasi')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3"> Daftar Registrasi</h1>

            <!-- <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a> -->
            <a href="{{ url('/registrasi/create') }}" class="btn btn-primary my-3">Tambah Data</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif


            <ul class="list-group">
                @foreach ( $registrasi as $daftar)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $daftar->nama }}
                    <a href="/registrasi/{{ $daftar->id }}" class="btn btn-danger">DETAIL </a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div> @endsection