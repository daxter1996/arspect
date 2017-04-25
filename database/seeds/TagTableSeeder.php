<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tags')->delete();

        Tag::create(array(
            'id'     => '1',
            'type' => 'Impresionista',
        ));

        Tag::create(array(
            'id'     => '2',
            'type' => 'Realista',
        ));

        Tag::create(array(
            'id'     => '3',
            'type' => 'Abstracto',
        ));
    }
}
