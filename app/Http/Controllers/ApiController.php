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
        $Animal_1 = Animal::find(rand(1, 40));
        $Animal_2 = Animal::find(rand(1, 40));
        $Animal_3 = Animal::find(rand(1, 40));
        $Animal_4 = Animal::find(rand(1, 40));

        return view('index', ['Animal_1'=>$Animal_1, 'Animal_2'=>$Animal_2, 'Animal_3'=>$Animal_3, 'Animal_4'=>$Animal_4]);
    }

    //Función de Inicio o Index de Dinosarios
    public function indexD(){
        //Elegir 4 Dinosaurios aleatorios para el Index

        return view('indexD');
    }

    public function animales($id){
        //Buscar el Animal y enviar 2 Animales aleatorios
        $Animal = Animal::find($id);
        $Animal_1 = Animal::find(rand(1, 40));
        $Animal_2 = Animal::find(rand(1, 40));

        //Variable para los ID de los Animales
        $id = $Animal['ID'];
    
        return view('animales', ['Animal'=>$Animal, 'Animal_1'=>$Animal_1, 'Animal_2'=>$Animal_2, 'id'=>$id]);
    }

    //Función de la vista de Acerca De
    public function acercaDe(){
        return view('about');
    }
}
