<?php

use App\Campus;
use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campus::create(
            [
                'name'=>"Main Campus",
                'location'=>"Accra",
                'phone'=>"030000000",
                'phone1'=>"030000001",
                'phone2'=>"030000002",
                'description'=>""

            ]
        );
    }
}
