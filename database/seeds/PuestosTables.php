<?php

use Illuminate\Database\Seeder;

class PuestosTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
            'nombre' => "Asadito",
            'x' => "14.586573",
            'y' => "-90.553003",

        ]);
        DB::table('puestos')->insert([
            'nombre' => "Sarita",
            'x' => "14.586537",
            'y' => "-90.553011",

        ]);
        DB::table('puestos')->insert([
            'nombre' => "Los chatos",
            'x' => "14.586537",
            'y' => "-90.553011",

        ]);
        DB::table('puestos')->insert([
            'nombre' => "Delisano",
            'x' => "14.586475",
            'y' => "-90.553027",
        ]);
        DB::table('puestos')->insert([
            'nombre' => "Al Macarone",
            'x' => "14.587063",
            'y' => "-90.552582",
        ]);
        DB::table('puestos')->insert([
            'nombre' => "Casa de la grasa",
            'x' => "14.587875",
            'y' => "-90.552544",
        ]);
    }
}
