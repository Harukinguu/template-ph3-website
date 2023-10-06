<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'quiz_id' => '1',
        ]);

        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
            'quiz_id' => '1',
        ]);

        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => 'IoTとは何の略でしょう？',
            'quiz_id' => '1',
        ]);

        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => '出身地はどこでしょう？',
            'quiz_id' => '2',
        ]);

        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => '在籍中の大学はどこでしょう？',
            'quiz_id' => '2',
        ]);

        Question::create([
            'image' => 'https://www.yoshinoya.com/wp-content/uploads/2022/02/17122831/cheese_gyu_don.jpg',
            'text' => '動物に例えるとなんと言われることが多いでしょう？',
            'quiz_id' => '2',
        ]);
    }
}
