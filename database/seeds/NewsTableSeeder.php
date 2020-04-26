<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('news') -> truncate();
        \Illuminate\Support\Facades\DB::table('news') -> insert([
            [
                'id' => '1',
                'title' => 'bai1',
                'summary' => 'b1',
                'content' => 'abc',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1586698467/tpbs_iucj8e.jpg',
                'hot' => '1',
                'category_news_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

        ]);
    }
}