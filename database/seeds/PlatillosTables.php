<?php

use Illuminate\Database\Seeder;

class PlatillosTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('platillos')->insert([
            'nombre' =>"Churrasquito",
            'precio' => "10.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "1",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Almuerzo completo",
            'precio' => "10.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "1",
        ]);


        DB::table('platillos')->insert([
            'nombre' =>"Banana split",
            'precio' => "19.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Sundae",
            'precio' => "12.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Sundae Especial",
            'precio' => "16.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Milk Shake",
            'precio' => "17.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Cono waffle con chocolate",
            'precio' => "15.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Cono waffle",
            'precio' => "9.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "2",
        ]);


        DB::table('platillos')->insert([
            'nombre' =>"Pan con salchicha",
            'precio' => "6.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "3",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Pan con chorizo",
            'precio' => "7.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "3",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Pan con mixto",
            'precio' => "9.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "3",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Tortilla con carne",
            'precio' => "14.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "3",
        ]);


        DB::table('platillos')->insert([
            'nombre' =>"Paninis",
            'precio' => "14.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "4",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Licuados",
            'precio' => "8.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "4",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Ensaladas",
            'precio' => "14.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "4",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Wraps",
            'precio' => "14.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "4",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Smoothies",
            'precio' => "14.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "4",
        ]);


        DB::table('platillos')->insert([
            'nombre' =>"Porción de pizza",
            'precio' => "6.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "5",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Personal",
            'precio' => "12.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "5",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Combo dos porciones",
            'precio' => "10.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "5",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Tradicional grande",
            'precio' => "60.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "5",
        ]);

        DB::table('platillos')->insert([
            'nombre' =>"Pan con salchicha especial",
            'precio' => "10.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "6",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Pan economico",
            'precio' => "7.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "6",
        ]);
        DB::table('platillos')->insert([
            'nombre' =>"Pan con chorizo y guacamol",
            'precio' => "10.00",
            'descripcion' => $faker->text(100),
            "puesto_id" => "6",
        ]);
    }
}
