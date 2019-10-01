<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Form Tambah Registrasi')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3"> FORM TAMBAH REGISTRASI</h1>
            <form method="post" action="{{ url('/registrasi') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama User</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Nama User" name="nama" value="{{ old('nama')}}"> @error('nama') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email')}}">
                    @error('email') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">HandPhone</label>
                    <input type="text" class="form-control @error('handphone') is-invalid @enderror" id="handphone" placeholder="Input HandPhone" name="handphone" value="{{ old('handphone')}}">
                    @error('handphone') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="Ps" placeholder="Masukan Passsword Anda" name="password" value="{{ old('password')}}">
                    @error('password') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Input alamat" name="alamat" value="{{ old('alamat')}}">
                    @error('alamat') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>




                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div> @endsection