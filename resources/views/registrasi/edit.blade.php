<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','Ubah Data Registrasi')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3"> FORM UBAH REGISTRASI</h1>
            <form method="post" action="/registrasi/{{ $registrasi->id }}">
                @method('patch')
                @csrf

                <div class="form-group">
                    <label for="nama">Nama User</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Nama User" name="nama" value="{{ $registrasi->nama }}"> @error('nama') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ $registrasi->email }}">
                    @error('email') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">HandPhone</label>
                    <input type="text" class="form-control @error('handphone') is-invalid @enderror" id="handphone" placeholder="Input HandPhone" name="handphone" value="{{ $registrasi->handphone }}">
                    @error('handphone') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="Ps" placeholder="Masukan Passsword Anda" name="password" value="{{ $registrasi->password }}">
                    @error('password') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama">alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Input alamat" name="alamat" value="{{ $registrasi->alamat }}">
                    @error('alamat') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>


                <button type="submit" class="btn btn-primary">Ubah Data</button>

            </form>


        </div>


    </div>
</div>
</div> @endsection