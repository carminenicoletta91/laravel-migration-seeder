<?php

use Illuminate\Database\Seeder;
use App\Model\Place;
class placesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Place::class,10) ->create();
    }
}
