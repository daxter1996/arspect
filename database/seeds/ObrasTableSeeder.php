<?php

use Illuminate\Database\Seeder;

use App\Obra;

class ObrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obras')->delete();

        Obra::create(array(
            'nombre' => 'Obra 1',
            'descripccion' => 'Descripccion Obra 1',
            'url' => 'Obra 1',
            'user_id' => '1'
        ));

        Obra::create(array(
            'nombre' => 'Obra 2',
            'descripccion' => 'Descripccion Obra 2',
            'url' => 'Obra 2',
            'user_id' => '1'
        ));
    }
}
