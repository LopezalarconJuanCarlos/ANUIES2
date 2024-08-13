<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    use HasFactory;
    protected $table = 'tb_archivos';
    protected $primaryKey = 'id_archivos';
    protected $fillable =[
        'nombre',
        'archivo',
        'id_informacion',
        'detalle'
    ];
}
