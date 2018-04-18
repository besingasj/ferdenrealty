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

        $agent1 = new User;
        $agent1->name = "Raymar Carlo G. Baloloy";
        $agent1->email = "lly.nido@gmail.com";
        $admin->level = "agent";
        $agent1->password = bcrypt("B@loloy123");
        $agent1->mobile_number = "09778552942";
        $agent1->office_number = "6691163";
        $agent1->facebook_url = "www.facebook.com/romallyrealestate";
        $agent1->save();

        $agent2 = new User;
        $agent2->name = "Romally N. Nido";
        $agent2->email = "lly.baloloy@gmail.con";
        $admin->level = "agent";
        $agent2->password = bcrypt("N!do123");
        $agent2->mobile_number = "09151332942";
        $agent2->facebook_url = "www.facebook.com/romallyrealestate";
        $agent2->save();
    }
}
