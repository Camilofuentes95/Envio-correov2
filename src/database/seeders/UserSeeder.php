<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dato = new dato ();

        $dato->name = "Pepito";
        $dato->email = "Pepito@prueba.com";

        $dato->save();

        $dato2 = new dato ();

        $dato2->name = "Pepito2";
        $dato2->email = "Pepito2@prueba.com";

        $dato2->save();
    }
}
