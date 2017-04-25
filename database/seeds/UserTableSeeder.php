<?php

use Illuminate\Database\Seeder;

use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->delete();

        User::create(array(
            'name' => 'User1',
            'email' => 'foo1@bar.com',
            'password' => 'asdfasf',
            'dni' => '11234',
            'type' => '1',
            'surname' => 'Surname1'
        ));
        User::create(array(
            'name' => 'User2',
            'email' => 'foo2@bar.com',
            'password' => 'asdfasf',
            'dni' => '21234',
            'type' => '1',
            'surname' => 'Surname2'
        ));
        User::create(array(
            'name' => 'User3',
            'email' => 'foo3@bar.com',
            'password' => 'asdfasf',
            'dni' => '31234',
            'type' => '1',
            'surname' => 'Surname3'
        ));
        User::create(array(
            'name' => 'User4',
            'email' => 'foo4@bar.com',
            'password' => 'asdfasf',
            'dni' => '41234',
            'type' => '1',
            'surname' => 'Surname4'
        ));


    }
}
