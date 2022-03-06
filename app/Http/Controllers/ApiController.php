<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ApiController extends Controller
{
    public function index(){
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'https://zoo-animal-api.herokuapp.com/animals/rand/10');
        $Animales = json_decode($response->getBody()->getContents(), true);

        return view('index', ['Animales'=>$Animales]);
    }
}
