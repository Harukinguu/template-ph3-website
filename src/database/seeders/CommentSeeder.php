<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'post_id' => '1',
            'body' => 'Comment 1',
        ]);

        Comment::create([
            'post_id' => '1',
            'body' => 'Comment 2',
        ]);

        Comment::create([
            'post_id' => '2',
            'body' => 'Comment 3',
        ]);

        Comment::create([
            'post_id' => '3',
            'body' => 'Comment 4',
        ]);

        Comment::create([
            'post_id' => '3',
            'body' => 'Comment 5',
        ]);
    }
}
