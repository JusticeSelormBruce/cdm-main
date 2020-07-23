<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Justice Selorm Bruce',
                'email'=>'itcare@ktu.edu.gh',
                'password'=>Hash::make('$$web@me'),
                'campus_id'=>1,
                'user_type'=>'admin'
            ]
        );
    }
}
