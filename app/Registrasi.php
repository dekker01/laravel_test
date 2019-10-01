<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    // Mempertahankan nama tabel
    protected $table = 'registrasi';
    // untuk simpan ke database
    protected $fillable = ['nama', 'email', 'handphone', 'password', 'alamat'];
}
