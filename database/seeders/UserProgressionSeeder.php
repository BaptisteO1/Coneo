<?php

namespace Database\Seeders;

use App\Models\UserProgression;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProgressionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserProgression::Factory(10)->create();
    }
}
