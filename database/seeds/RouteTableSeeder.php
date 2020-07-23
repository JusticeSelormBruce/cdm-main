<?php

use App\Route;
use Illuminate\Database\Seeder;

class RouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'name' => 'Privilege',
            'route' => '/admin/assign-privilege-index'
        ]);
        Route::create([
            'name' => 'User Account',
            'route' => '/admin/user-accounts-index'
        ]);
        Route::create([
            'name' => 'Reset Password',
            'route' => '/admin/reset-password'
        ]);
        Route::create([
            'name' => 'Change Password',
            'route' => '/change-password-index'
        ]);
        Route::create([
            'name' => ' Campuses',
            'route' => '/admin/campus-index'
        ]);
        Route::create(
            [
                'name' => 'App Information',
                'route' => '/admin/app-info-index'
            ]
        );

        Route::create([
            'name' => 'General Settings',
            'route' => '/admin/general-settings'
        ]);
        Route::create(
            [
                'name' => 'Announcements',
                'route' => '/announcement-index'
            ]
        );
        Route::create(
            [
                'name' => 'College Settings',
                'route' => '/admin/college-settings'
            ]
        );
        Route::create(
            [
                'name' => 'Score Sheet',
                'route' => '/admin/score-sheet'
            ]
        );

        Route::create(
            [
                'name' => 'Accounts',
                'route' => '/admin/accounts-index'
            ]
        );
        Route::create(
            [
                'name' => 'Assign Subjects',
                'route' => '/admin/assign-subject-index'
            ]
        );
        Route::create(
            [
                'name' => 'Applicant',
                'route' => '/admin/applicant-register'
            ]
        );
    }
}

