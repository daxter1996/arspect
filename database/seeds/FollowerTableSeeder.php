<?php

use Illuminate\Database\Seeder;

use App\Follower;

class FollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('followers')->delete();

        Follower::create(array(
            'user_id'     => '1',
            'follow_id' => '2',
        ));

        // User with ID 2 is following user with ID 3
        Follower::create(array(
            'user_id'     => '2',
            'follow_id' => '3',
        ));

        // User with ID 3 is following user with ID 4
        Follower::create(array(
            'user_id'     => '3',
            'follow_id' => '4',
        ));

        // User with ID 4 is following user with ID 1
        Follower::create(array(
            'user_id'     => '4',
            'follow_id' => '1',
        ));
    }
}
