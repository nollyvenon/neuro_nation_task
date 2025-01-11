<?php

namespace Database\Seeders;

use App\Models\DomainCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DomainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DomainCategory::create([
            'name' => 'Category 1',
            'category_id' => 1,
            // 'timestamp' => now(),
        ]);

        DomainCategory::create([
            'name' => 'Category 2',
            'category_id' => 2,
           // 'timestamp' => now(),
        ]);

        DomainCategory::create([
            'name' => 'Category 3',
            'category_id' => 3,
            // 'timestamp' => now(),
        ]);
    }
}
