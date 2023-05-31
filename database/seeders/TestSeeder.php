<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 50; $i++) {
        //     $status = $i % 2 === 0 ?'enable':'disable';

        //     Test::create([
        //         'name' => 'test_'.$i,
        //         'content' => 'Data_'.$i,
        //         'status' => $status ,
        //         'show' => '1'
        //     ]);
        // }

        Test::factory()->count(10)
            ->state(
                new Sequence(
                    ['status' => 'enable'],
                    ['status' => 'disable'],
                )
            )
            ->state(
                new Sequence(
                    ['show' => '0'],
                    ['show' => '1'],
                )
            )

            ->create();
    }
}
