<?php

use Illuminate\Database\Seeder;

class TagsTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'nombre' => "Italiana",
        ]);
        DB::table('tags')->insert([
            'nombre' => "Americana",
        ]);
        DB::table('tags')->insert([
            'nombre' => "Comida Rapida",
        ]);
        DB::table('tags')->insert([
            'nombre' => "Barato",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Rico",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Rapido",
        ]);
        DB::table('tags')->insert([
            'nombre' => "Horneado",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Frito",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Dulce",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Frio",
        ]);

        DB::table('tags')->insert([
            'nombre' => "Caliente",
        ]);
        DB::table('tags')->insert([
            'nombre' => "Saludable",
        ]);
    }
}
