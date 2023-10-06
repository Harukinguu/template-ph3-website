<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Title1',
            'body' => 'Body1',
        ]);

        Post::create([
            'title' => 'Title2',
            'body' => 'Body2',
        ]);

        Post::create([
            'title' => 'Title3',
            'body' => 'Body3',
        ]);
        

    }
}
