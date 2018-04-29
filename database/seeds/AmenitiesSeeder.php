<?php

use Illuminate\Database\Seeder;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = [
            'Club House',
            'Swiming Pool',
            'Basketball Court ',
            'Gazebo'
        ];

        foreach ($amenities as $amenity) {
            $new = new \App\Models\Amenity;
            $new->name = $amenity;
            $new->save();
        }
    }
}
