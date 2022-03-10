<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //Declarar el modelo con los datos de la tabla Animales
    use HasFactory;
    protected $table = 'animales';
}
