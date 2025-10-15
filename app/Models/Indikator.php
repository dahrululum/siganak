<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_indikator';
    protected $fillable = [
        'id',
        'id_induk',
        'id_target',
        'alias',
        'kode',
        'nama',
        'sumber',
        'satuan',
        'tahun1',
        'tahun2',
        'tahun3',
        'tahun4',
        'tahun5',
        'status_verifikasi',
        'status_aktif',
         
    ];
    public function manySub()
    {
        return $this->hasMany(Indikator::class, 'id_induk', 'id')->where('status_aktif','=',1);
    }
    public function getTarget()
    {
        return $this->hasOne(Reftarget::class,'id','id_target')->withDefault();
    }
    //query u isi nilai
    public static function query($params = [])
    {
        $query = parent::query();

     
        if (@$params['id_target'] != null) {
             
                $query->where('id_target', '=', $params['id_target'])->where('id_induk',0)->where('status_aktif',1);
             
        }else{
            $query->where('id_target', '=', 0)->where('id_induk',0)->where('status_aktif',1);
        }
        
        $query->orderby('id','asc');
        

        return $query;
    }

}
