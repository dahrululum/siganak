<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemen extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_elemen';
    protected $fillable = [
        'id',
        'id_induk',
        'id_wilayah',
        'id_jenis',
        'alias',
        'sumber',
        'nama',
        'status_verifikasi',
        'status_aktif',
         
    ];
    public function getJenis()
    {
        return $this->hasOne(Refjenis::class,'id','id_jenis')->withDefault();
    }
    public function manySub()
    {
        return $this->hasMany(Elemen::class, 'id_induk', 'id')->where('status_aktif','=',1);
    }
}
