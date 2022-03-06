<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ApiController extends Controller
{
    public function index(){
        $Animales = Animal::all();

        return view('index', ['Animales'=>$Animales]);
    }
}
