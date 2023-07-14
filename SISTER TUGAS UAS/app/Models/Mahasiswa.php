<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $primarykey = "id";
    protected $fillable = [
        'nim_mahasiswa', 'nama_mahasiswa', 'jenis_kelamin', 'alamat','prodi','jurusan','fakultas','kelas'
    ];
}
