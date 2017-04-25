<?php

use Illuminate\Database\Seeder;

use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('events')->delete();

        Event::create(array(
            'id'     => '1',
            'nombre' => 'Event1',
            'descripccion' => 'Descripccion 1',
            'localizacion' => 'Barcelona',
            'user_id' => '1',
        ));

        Event::create(array(
            'id'     => '2',
            'nombre' => 'Event2',
            'descripccion' => 'Descripccion 3',
            'localizacion' => 'Madrid',
            'user_id' => '1',
        ));

        Event::create(array(
            'id'     => '3',
            'nombre' => 'Event3',
            'descripccion' => 'Descripccion 3',
            'localizacion' => 'Menorca',
            'user_id' => '1',
        ));
    }
}
