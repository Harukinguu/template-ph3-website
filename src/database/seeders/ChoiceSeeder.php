<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choice;


class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::create([
            'question_id' => '1',
            'text' => '約79万人',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '1',
            'text' => '約28万人',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '1',
            'text' => '約183万人',
            'is_correct' => '1',
        ]);
        Choice::create([
            'question_id' => '2',
            'text' => 'INTECH',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '2',
            'text' => 'BIZZTECH',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '2',
            'text' => 'XTECH',
            'is_correct' => '1',
        ]);
        Choice::create([
            'question_id' => '3',
            'text' => 'Internet of Things',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '3',
            'text' => 'Information on Tool',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '3',
            'text' => 'Integrate into Technology',
            'is_correct' => '1',
        ]);
        Choice::create([
            'question_id' => '4',
            'text' => '東京',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '4',
            'text' => 'ハワイ',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '4',
            'text' => 'ロンドン',
            'is_correct' => '1',
        ]);
        Choice::create([
            'question_id' => '5',
            'text' => '慶應大学',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '5',
            'text' => 'ハーバード大学',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '5',
            'text' => 'トロント大学',
            'is_correct' => '1',
        ]);
        Choice::create([
            'question_id' => '6',
            'text' => '猫',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '6',
            'text' => '犬',
            'is_correct' => '0',
        ]);
        Choice::create([
            'question_id' => '6',
            'text' => 'コアラ',
            'is_correct' => '1',
        ]);
    }
}
