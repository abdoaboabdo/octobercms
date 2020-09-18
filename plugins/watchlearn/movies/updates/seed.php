<?php
namespace Watchlearn\Movies\Updates;

use October\Rain\Database\Updates\Seeder;
use Faker\Factory;
use Watchlearn\Movies\Models\Movie;

class SeedAllTables extends Seeder
{

    public function run(){
        $faker=Factory::create();
        for ($i=0;$i<100;$i++){
            $name=$faker->sentence($nbWords = 3,$variableNbWords = true);
            Movie::create([
                'name'          =>  $name,
                'description'   =>  $faker->paragraph(3,true),
                'slug'          =>  str_slug($name,'-'),
                'year'          =>  $faker->year($max='now'),
            ]); 
        }
    }


}
