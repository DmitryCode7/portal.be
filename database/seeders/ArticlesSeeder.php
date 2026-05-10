<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Новая статья 1',
            'content' => 'lorem ipsum',
            'image' => 'http://portal.be/david1.jpg'
        ]);
        Article::create([
            'title' => 'Новая статья 2',
            'content' => 'Hello world' ,
            
        ]);
    }
}
