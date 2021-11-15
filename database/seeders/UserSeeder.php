<?php

namespace Database\Seeders;

use App\Models\Training;
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
        Training::factory()->count(50)->create();
    }
}
