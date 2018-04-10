<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = "Sarinah Joy Sedo";
        $admin->email = "besingasj@gmail.com";
        $admin->level = "admin";
        $admin->password = bcrypt("password");
        $admin->save();
    }
}
