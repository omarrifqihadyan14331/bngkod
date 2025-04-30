<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Postingan Pertama',
            'content' => 'Ini adalah isi dari postingan pertama.',
            'user_id' => 1, // Pastikan ada user dengan ID 1
        ]);
    }
}
