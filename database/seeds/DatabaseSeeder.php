<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');
        $this->call(OauthClientTableSeeder::class);
        $this->command->info('Oauth Clients table seeded!');


        Model::reguard();
    }
}
