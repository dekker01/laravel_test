<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Panggil untuk delete sementara
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // untuk hapus
    use Softdeletes;

    // untuk simpan ke database
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
