<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Referenciar el modelo Animal
use App\Models\Animal;

class AnimalController extends Controller
{ 
    //Función de la Vista del JSON de la Base de Datos
    public function consultarAnimales(){
        //Enviar todos los Animales
        $Animales = Animal::all();

        //Convertir el arreglo a JSON
        return response()->json(["Estatus" => "Animales_Listos","Animales" => $Animales]);
    }
}
