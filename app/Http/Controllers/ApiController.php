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
        //Elegir 3 Dinosaurios aleatorios para el Index
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'http://dinoanimales.herokuapp.com/consultarDinosaurios');
        $Dinosaurios = json_decode($response->getBody()->getContents(), true);
    
        $Dino1 = $Dinosaurios["Dinosaurios"][rand(1,10)];
        $Dino2 = $Dinosaurios["Dinosaurios"][rand(1,10)];
        $Dino3 = $Dinosaurios["Dinosaurios"][rand(1,10)];

        return view('indexD', ['Dino1'=>$Dino1, 'Dino2'=>$Dino2, 'Dino3'=>$Dino3]);
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

    public function dinosaurios($id){
        //Buscar el Dinosaurio y enviar 2 Dinosaurios aleatorios
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'http://dinoanimales.herokuapp.com/consultarDinosaurio/'.$id);
        $Dinosaurio = json_decode($response->getBody()->getContents(), true);

        //Variable para los ID de los Dinosaurios
        $Dino = $Dinosaurio["Dinosaurio"];
        $id = $Dino['id'];

        return view('dinosaurios', ['Dino'=>$Dino, 'id'=>$id]);
    }

    //Función de la vista de Acerca De
    public function acercaDe(){
        return view('about');
    }
}
