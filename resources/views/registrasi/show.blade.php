<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Detail Registrasi')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3"> Detail Registrasi</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $registrasi->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $registrasi->email }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $registrasi->handphone }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $registrasi->alamat }}</h6>

                    <a href="{{ $registrasi-> id }}/edit" class="btn btn-success">EDIT</a>
                    <form action="{{ $registrasi->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    <a href="/registrasi" class="card-link">Kembali</a>
                </div>
            </div>

        </div>

    </div>
</div>
</div> @endsection