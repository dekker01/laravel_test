<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Daftar Mahasiswa')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3"> Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NRP</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs )
                    <tr>
                        <td scope="rows">{{ $loop->iteration }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nrp }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="" class="badge badge-success">EDIT</a>

                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> @endsection