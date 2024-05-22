<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

     protected $table = 'pasien';
     //tabel adalah property laravel yang didalam nya terkoneksi dengan 
     //nama table yang mau kita tampilkan data nya
     //tetapi hanya dapat di akses didalam class model tersebut ataupun turunan nya 

     protected $fillable = ['id','nama','kode','temp_lahir','tgl_lahir','gender','email','alamat','kelurahan_id'];
    // fillable adalah variabel dalam model aloquet yang tuganya
    //membatasi kolom mana yang dapat di isi atau di input
    
}
