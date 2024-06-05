<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 5 ; $i++) { 
            
            $type = new Type();
            $name = $faker->word();
            $type->name = $name;
            $type->slug = Str::slug($name);
            $type->save();
        }
    }
}
