<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reftarget extends Model
{
    use HasFactory;
    
    protected $table = 'ref_target';
    protected $fillable = [
        'id',
        'kdtarget',
        'alias',
        'namatarget',
        'status',
         
         
    ];
    public function hasIndikator()
    {
        return $this->hasMany(Indikator::class, 'id_target', 'id')->where('status_aktif','=',1);
    }
}
