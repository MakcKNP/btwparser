<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PackSize;
class PackSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $packSizes = ['case', 'each', 'box', 'packet'];

        foreach ($packSizes as $size) {
            PackSize::create([
                'name' => $size,
            ]);
        }
    }
}
