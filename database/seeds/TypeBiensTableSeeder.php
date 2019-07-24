<?php

use Illuminate\Database\Seeder;

class TypeBiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TypeBien::class, 10)->create();
    }
}
