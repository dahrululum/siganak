<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nindi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'nilai_indikator';
    protected $fillable = [
        'id',
        'alias',
        'id_indikator',
        'id_jenis',
        'tahun',
        'nilai',
        'sumber',
        'status_verifikasi',
        'status_aktif',
         
    ];
}
