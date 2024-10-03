<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refbidang extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'ref_bidang';
    protected $fillable = [
        'id',
        'id_jenis',
        'alias',
        'namabidang',
        'status',
         
    ];
    public function getJenis()
    {
        return $this->hasOne(Refjenis::class,'id','id_jenis')->withDefault();
    }
}
