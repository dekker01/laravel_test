<!-- Untuk Header -->
@extends('layout/main')
<!-- Untuk Title -->
@section('title','About')
<!-- Untuk Konten -->
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3"> {{$nama}}</h1>
        </div>
    </div>
</div>
@endsection