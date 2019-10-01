<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Detail Mahasiswa')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3"> Detail Student</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->email }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->jurusan }}</h6>

                    <a href="{{ $student-> id }}/edit" class="btn btn-success">EDIT</a>
                    <form action="{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>

        </div>

    </div>
</div>
</div> @endsection