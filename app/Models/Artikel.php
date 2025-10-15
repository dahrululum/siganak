<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_artikel';
    protected $fillable = [
        'id',
        'alias',
        'judul',
        'teaser',
        'isi',
        'file_foto',
        'file_download',
        'inputby',
        'tglinput',
        'status_publish',
        'tgl_publish',
        'ket',
         
    ];
}
