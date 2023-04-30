<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mision;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cosmos = Mision::where('name', 'Cosmos')->first()->id;
        $terra = Mision::where('name', 'Terra')->first()->id;
        $ciudad_medival = Mision::where('name', 'Ciudad Medival')->first()->id;
        $aldea_futurista = Mision::where('name', 'Aldea Futurista')->first()->id;
        $minigames = Mision::where('name', 'Minigames')->first()->id;
        //Cosmos
        $artemis = "Artemis 1";
        $lanzamiento = "Lanzamiento de cohetes";
        $iss = "ISS";
        $base_lunar = "Base Lunar";
        //Minigames
        $caracara = "Cara a cara";
        $pista_circular = "Pista circular";
        $ajedrez = "Ajedrez";
        $mario_maker = "Mario Maker";
        $hexagonia = "Hexagonia";
        // Terra
        $casasustentable = "Casa Sustentable";
        $agente_grajero = "Agente Granjero";
        $plantaAutomatica = "Planta Automática";
        //Ciudad Medieval
        $mercado = "Mercado";
        $iglesia  = "Iglesia";
        $castillo = "Castillo";
        $carcel = "Carcel";
        $golf_agente = "Golf Agente";
        //Aldea Futurista
        $rasca_cielo = "Rasca Cielo";
        $laboratorio = "Laboratorio";
        $fabrica = "Fabrica";

        //insert data into objective table
        DB::table('objectives')->insert([
            [
            'id' =>  Uuid::generate()->string,
            'name' => $artemis,
            'mision_id' => $cosmos,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $lanzamiento,
            'mision_id' => $cosmos,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $iss,
            'mision_id' => $cosmos,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $base_lunar,
            'mision_id' => $cosmos,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $caracara,
            'mision_id' => $minigames,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $pista_circular,
            'mision_id' => $minigames,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $ajedrez,
            'mision_id' => $minigames,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $mario_maker,
            'mision_id' => $minigames,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $hexagonia,
            'mision_id' => $minigames,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $casasustentable,
            'mision_id' => $terra,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $agente_grajero,
            'mision_id' => $terra,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $plantaAutomatica,
            'mision_id' => $terra,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $mercado,
            'mision_id' => $ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $iglesia,
            'mision_id' => $ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $castillo,
            'mision_id' => $ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $carcel,
            'mision_id' => $ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $golf_agente,
            'mision_id' => $ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $rasca_cielo,
            'mision_id' => $aldea_futurista,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $laboratorio,
            'mision_id' => $aldea_futurista,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => Uuid::generate()->string,
            'name' => $fabrica,
            'mision_id' => $aldea_futurista,
            'created_at' => now(),
            'updated_at' => now(),
            ]
            
        ]);

    }
}
