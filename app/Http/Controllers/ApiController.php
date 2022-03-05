<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function consumirAPI()
    {
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'https://zoo-animal-api.herokuapp.com/animals/rand/10');
        $Animales = json_decode($response->getBody()->getContents(), true);

        return($Animales); 
    }


    public function index(){
        return view('index', ['Animales'=>$this->consumirAPI()]);
    }
}
