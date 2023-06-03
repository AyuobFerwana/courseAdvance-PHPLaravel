<?php

namespace Database\Seeders;

use App\Models\Orm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Orm::factory()->count(1000)->create();
        // time 1,999.64 ms in orm

        for ($i = 0; $i < 1000; $i++) {
            DB::table('orms')->insert([
                'title' => fake()->name(),
                'content' => fake()->word(),
            ]);
        }
        // time 1,477.41 ms
    }
}
