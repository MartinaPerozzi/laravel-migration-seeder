<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // per poter usare il comando php artisan db:seed una volta per ogni Seeder
        $this->call([
            TrainSeeder::class
        ]);
    }
}
