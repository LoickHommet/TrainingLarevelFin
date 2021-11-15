<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TrainingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
          UserSeeder::class,
          TrainingSeeder::class,
          Category::class,
          Chapter::class,
      ]);
    }
}
