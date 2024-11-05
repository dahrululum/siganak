<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forumanak extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_forumanak';
    protected $fillable = [
        'id',
        'alias',
        'judul',
        'teaser',
        'isi',
        'status',
        'file_foto',
        'inputby',
      
         
    ];
}
