<?php

namespace Database\Seeders;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $uuid_cosmos = Uuid::generate()->string; 
        $uuid_mision = "Cosmos";
        //create uuid for terra mision
        $uuid_terra = Uuid::generate()->string;
        $uuid_mision_terra = "Terra";
        //create uuid for Ciudad medival mision
        $uuid_ciudad_medival = Uuid::generate()->string;
        $uuid_mision_ciudad_medival = "Ciudad Medival";
        //create uuid for Aldea futurista mision
        $uuid_aldea_futurista = Uuid::generate()->string;
        $uuid_mision_aldea_futurista = "Aldea Futurista";
        // create uuid for minigames
        $uuid_minigame = Uuid::generate()->string;
        $uuid_minigame_name = "Minigames";

        //insert data into mision table
       DB::table('misions')->insert([
        [
            'id' => $uuid_cosmos,
            'name' => $uuid_mision,
            'created_at' =>     now(),
            'updated_at' => now()
        ],
        [
            'id' => $uuid_terra,
            'name' => $uuid_mision_terra,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => $uuid_ciudad_medival,
            'name' => $uuid_mision_ciudad_medival,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => $uuid_aldea_futurista,
            'name' => $uuid_mision_aldea_futurista,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => $uuid_minigame,
            'name' => $uuid_minigame_name,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }
}
