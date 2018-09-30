<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class createAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'fname' => 'superadmin', 
           'lname' => 'superadmin', 
           'username' => env('SUPERADMIN_USERNAME'), 
           'password' => env('SUPERADMIN_PASSWORD'), 
           'is_admin' => '2', 
        ]);
    }
}
