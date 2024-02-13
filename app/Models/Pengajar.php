<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $table = 'pengajars';
    protected $fillable = ['id', 'id_guru', 'id_mapel', 'kelas', 'jam_pelajaran'];
    protected $hidden =  ['id'];
}
