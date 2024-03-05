<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('test123'),
        ]);

        \App\Models\Brands::factory()->create([
            ['brand' => 'Chevrolet'],
            ['brand' => 'Dodge']
        ]);

        \App\Models\Cars::factory()->create([
            ['brands_id' => 2,
             'name' => 'Charger',
             'model' => date("Y-m-d H:i:s")
            ],
            ['brands_id' => 2,
             'name' => 'Camaro',
             'model' => date("Y-m-d H:i:s")
            ],
            ['brands_id' => 2,
             'name' => 'Aveo Sedan',
             'model' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
