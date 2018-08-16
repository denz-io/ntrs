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
           'fname' => 'admin', 
           'lname' => 'admin', 
           'username' => 'admin', 
           'password' => 'admin', 
           'is_admin' => '1', 
        ]);
    }
}
