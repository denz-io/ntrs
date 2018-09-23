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
           'username' => 'admin', 
           'password' => 'admin', 
           'is_admin' => '2', 
        ]);
    }
}
