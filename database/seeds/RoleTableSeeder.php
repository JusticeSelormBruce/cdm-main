<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'routes_ids'=> "[1,2,3,4,5,6,7,8,9,10,11,12,13]",
                'user_id'=> 1
            ]
        );
    }
}
