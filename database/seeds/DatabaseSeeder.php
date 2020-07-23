<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CampusTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RouteTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
