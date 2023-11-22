<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Uncomment this block if you want to seed with specific data
        // $data = [
        //     ['id' => 1, 'name' => 'Salsabila', 'score' => 100],
        //     ['id' => 2, 'name' => 'Aulia', 'score' => 100],
        //     ['id' => 3, 'name' => 'Choirunisa', 'score' => 100],
        // ];
        // DB::table('student')->insert($data);

    
        $faker = FakerFactory::create();

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'name' => $faker->name,
                'score' => $faker->numberBetween(50, 100),
            ];
            DB::table('student')->insert($data);
        }
    }
}
