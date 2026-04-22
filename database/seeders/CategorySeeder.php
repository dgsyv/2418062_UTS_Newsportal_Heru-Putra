<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Teknologi'],
            ['name' => 'Olahraga'],
            ['name' => 'Politik'],
            ['name' => 'Hiburan'],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
