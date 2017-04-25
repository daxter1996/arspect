<?php

use Illuminate\Database\Seeder;

use App\Gallery;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('galleries')->delete();

        Gallery::create(array(
            'name' => 'Gallery 1',
            'location' => 'Madrid',
        ));

        Gallery::create(array(
            'name' => 'Gallery 2',
            'location' => 'Barcelona',
        ));
    }
}
