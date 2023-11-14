<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<20; $i++)
        {
            DB::table('article_tag')->insert([
                'article_id' => $i,
                'tag_id'     => rand(1, 20)
            ]);
        }
    }
}
