<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primarykey = 'no_rm';
    protected $fillable = ['no_rm', 'nama_pasien', 'alamat', 'jk', 'no_hp', 'tgl_lahir' ];
    // protected $guarded = []; guarded bisa digunakan untuk mengakali sama saja dgn fillable, agar tidak perlu tulis satu2
}
