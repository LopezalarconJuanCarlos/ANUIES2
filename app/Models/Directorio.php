<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;
    protected $table = 'tb_directorio';
    protected $primaryKey = 'id_directorio';
    protected $fillable =[
        'puesto',
        'nombre',
        'app',
        'apm',
        'institucion',
        'telefono',
        'email',
        'activo'
    ];
}
