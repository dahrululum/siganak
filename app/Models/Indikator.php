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
        'id_jenis',
        'alias',
        'sumber',
        'satuan',
        'nama',
        'status_verifikasi',
        'status_aktif',
         
    ];
    public function manySub()
    {
        return $this->hasMany(Indikator::class, 'id_induk', 'id')->where('status_aktif','=',1);
    }
    //query u isi nilai
    public static function query($params = [])
    {
        $query = parent::query();

     
        if (@$params['id_jenis'] != null) {
             
                $query->where('id_jenis', '=', $params['id_jenis'])->where('id_induk',0)->where('status_aktif',1);
             
        }else{
            $query->where('id_jenis', '=', 0)->where('id_induk',0)->where('status_aktif',1);
        }
        
        $query->orderby('id','asc');
        

        return $query;
    }

}
