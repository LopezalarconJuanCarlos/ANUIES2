<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    use HasFactory;
    protected $table = 'tb_informacion';
    protected $primaryKey = 'id_informacion';
    protected $fillable =[
        'titulo',
        'informacion',
        'fi_publicacion',
        'ff_publicacion',
        'activo',
        'activobanner'
    ];
}
