<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Referenciar el modelo Animal
use App\Models\Animal;

class ApiController extends Controller
{
    //Función raiz del proyecto, redirecciona al Index
    public function raiz(){
        return redirect()->route('index');
    }

    //Función de Inicio o Index
    public function index(){
        //Elegir 4 Animales aleatorios para el Index
        $Animal_1 = Animal::find(rand(1, 20));
        $Animal_2 = Animal::find(rand(1, 20));
        $Animal_3 = Animal::find(rand(1, 20));
        $Animal_4 = Animal::find(rand(1, 20));

        return view('index', ['Animal_1'=>$Animal_1, 'Animal_2'=>$Animal_2, 'Animal_3'=>$Animal_3, 'Animal_4'=>$Animal_4]);
    }

    //Función de la vista de Acerca De
    public function acercaDe(){
        return view('about');
    }

    //Función de Prueba
    public function componentes(){
        return view('components');
    }
}
