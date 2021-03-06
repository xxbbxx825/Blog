<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Web全般', 'parent_id' => null],
                ['name' => 'プログラミング', 'parent_id' => null],
                ['name' => 'インフラ', 'parent_id' => null],
                ['name' => '雑記', 'parent_id' => null],
                ['name' => 'Laravel', 'parent_id' => 2],
                ['name' => 'Nuxt.js', 'parent_id' => 2],
                ['name' => 'PHP', 'parent_id' => 2],
            ]
        );
    }
}
