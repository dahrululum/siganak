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
        'id_bidang',
        
        'alias',
        'satuan',
        'sumber',
        'nama',
        'status_verifikasi',
        'status_aktif',
         
    ];
    public function getJenis()
    {
        return $this->hasOne(Refjenis::class,'id','id_jenis')->withDefault();
    }
    public function getInduk()
    {
        return $this->hasOne(Elemen::class,'id','id_induk')->withDefault();
    }
    public function getSupInduk($id)
    {
        //return $this->hasOne(Elemen::class,'id_induk',$id)->withDefault();
        $query = parent::query();
        $query->where('id', '=', $id)->where('status_aktif',1);
        

        return $query;
    }
    public function getBidang()
    {
        return $this->hasOne(Refbidang::class,'id','id_bidang')->withDefault();
    }
    public function manySub()
    {
        return $this->hasMany(Elemen::class, 'id_induk', 'id')->where('status_aktif','=',1);
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
    //query u isi nilai
    public static function queryreport($params = [])
    {
        $query = parent::query();

     
        // if (@$params['id_jenis'] != null) {
             
        //         $query->where('id_jenis', '=', $params['id_jenis'])->where('id_induk',0)->where('status_aktif',1);
             
        // }else{
        //     $query->where('id_jenis', '=', 0)->where('id_induk',0)->where('status_aktif',1);
        // }
        $query->where('id_induk',0)->where('status_aktif',1);
        $query->orderby('id','asc');
        

        return $query;
    }
    //query search
    public static function querysearch($params = [])
    {
        $query = parent::query();
        if (@$params['key'] != null) {
            
            // $query->where('data_api_pendidikan', 'like', '%' . $params['key'] . '%')
            //     ->orwhere('data_api_jabatan', 'like', '%' . $params['key'] . '%')
            //     ->orwhere('data_api_pelatihan', 'like', '%' . $params['key'] . '%')
            //     ->orwhere('data_api_sertifikasi', 'like', '%' . $params['key'] . '%');
            $query->where(function ($que){
                $key=$_GET['key'];
                $que->where('nama', 'like', '%' . $key . '%');
                    
            });
       
        }
        
        $query->orderby('id','desc');
        
        //    dd($query);
        return $query;
    }

    // //getnilai
    // public function getNilai($id_elemen,$id_jenis,$id_wilayah,$tahun)
    // {
    //    // return $this->hasOne(Nilai::class,'id','id_jenis')->withDefault();
    //    $query = parent::query();
    //    $query->where(
    //     [
    //         ['id_jenis','=',$id_jenis],
    //         ['id_wilayah','=',$id_wilayah],
    //         ['id_elemen','=',$id_elemen],
    //         ['tahun','=',$tahun],
    //     ]
    //    );
    //    return $query;
    // }


}
