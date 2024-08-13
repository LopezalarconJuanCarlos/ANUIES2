<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;
    protected $table = 'tb_imagenes';
    protected $primaryKey = 'id_imagen';
    protected $fillable =[
        'nombre',
        'foto',
        'id_informacion'
    ];
}
