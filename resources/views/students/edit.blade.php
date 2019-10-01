<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Ubah Data')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3"> FROM UBAH DATA</h1>

            <!-- <form method="post" action="/students"> -->
            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <!-- <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input Nama" name="txtnama">
                </div>

                <div class="form-group">
                    <label for="nama">NRP</label>
                    <input type="text" class="form-control" id="nama" placeholder="NRP" name="txtnrp">
                </div>

                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="txtemail">
                </div>

                <div class="form-group">
                    <label for="nama">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Jurusan" name="txtjurusan">
                </div> -->


                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Nama" name="nama" value="{{ $student->nama }}"> @error('nama') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="NRP" name="nrp" value="{{ $student->nrp }}">
                    @error('nrp') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>


                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ $student->email }}">
                    @error('email') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>



                <div class="form-group">
                    <label for="nama">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>




                <button type="submit" class="btn btn-primary">Ubah Data</button>

            </form>


        </div>


    </div>
</div>
</div> @endsection