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
        // $this->call(UsersTableSeeder::class);

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        $this->call(FollowerTableSeeder::class);
        $this->command->info('Follower table seeded!');

        $this->call(EventsTableSeeder::class);
        $this->command->info('Events table seeded!');

        $this->call(TagTableSeeder::class);
        $this->command->info('Tag table seeded!');

    }
}
