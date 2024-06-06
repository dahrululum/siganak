<?php

namespace App\Models;

 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'level',
        'id_instansi',
        'kdskpd',
        'kdsubskpd',
        'kdcab',
        'kduptd',
    ];
    public function getInstansi()
    {
        return $this->hasOne(Instansi::class,'id','id_instansi')->withDefault();
    }

}
