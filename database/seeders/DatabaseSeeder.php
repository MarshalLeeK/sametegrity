<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\questions;
use Illuminate\Database\Seeder;
use Database\Seeders\PatientsSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\DiagnosisSeeder;
use Database\Seeders\categoryDrugsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PatientsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TypeDocsSeeder::class);
        $this->call(DiagnosisSeeder::class);
        $this->call(questionSeeder::class);
        $this->call(categoryDrugsSeeder::class);
        // questions::factory(10)->create();
    }
}
