<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ApiController extends Controller
{
    public function raiz(){
        return redirect()->route('index');
    }

    public function index(){
        return view('index');
    }

    public function animales(){
        return view('animales');
    }

    public function acercaDe(){
        return view('about');
    }



   /* public function project(){
        $Animales = Animal::all();

        return view('project', ['Animales'=>$Animales]);
    }*/
}
