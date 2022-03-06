<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class animaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'https://zoo-animal-api.herokuapp.com/animals/rand/10');
        $Animales = json_decode($response->getBody()->getContents(), true);

        for($i=0; $i<10; $i++) 
        {
            DB::table('Animales')->insert([
                'Nombre' => $Animales[$i]['name'],
                'Nombre_latino' => $Animales[$i]['latin_name'],
                'Tipo' => $Animales[$i]['animal_type'],
                'Tiempo_activo' => $Animales[$i]['active_time'],
                'Longi_min' => $Animales[$i]['length_min'],
                'Longi_max' => $Animales[$i]['length_max'],
                'Peso_min' => $Animales[$i]['weight_min'],
                'Peso_max' => $Animales[$i]['weight_max'],
                'Esperanza_vida' => $Animales[$i]['lifespan'],
                'Habitat' => $Animales[$i]['habitat'],
                'Dieta' => $Animales[$i]['diet'],
                'Rango_geo' => $Animales[$i]['geo_range'],
                'Imagen' => $Animales[$i]['image_link'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
