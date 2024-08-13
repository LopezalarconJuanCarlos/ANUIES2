<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidades extends Model
{
    use HasFactory;
    protected $table = 'tb_universidades';
    protected $primaryKey = 'id_universidad';
    protected $fillable =[
        'nombre',
        'siglas',
        'logo',
        'url'
    ];
}
