<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

class SenderoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<7; $i++) {
            DB::table('senderos')->insert([
                'nombre' => 'Ruta ' . Str::random(10),
                'kms' => rand(1,50),
                'descripcion' => 'Lorep ipsum ' . Str::random(30),
                'dificultad' => 'media',
                'img' => 'storage/sendero-'. $i .'.jpg',
                'localidad' => 'Vera',
                'created_at' => Carbon::now()
            ]);
        }
        
    }
}
