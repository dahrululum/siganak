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
    public static function query($params = [])
    {
        $query = parent::query();

     
        if (@$params['id_jenis'] != null) {
             
                $query->where('id_jenis', '=', $params['id_jenis'])->where('id_induk',0)->where('status_aktif',1);
             
        }
        
        $query->orderby('id','asc');
        

        return $query;
    }

}
