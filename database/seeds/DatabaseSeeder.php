<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PuestosTables::class);
        $this->call(PlatillosTables::class);
        $this->call(TagsTables::class);
        $this->call(TagsPlatilloTables::class);
    }
}
