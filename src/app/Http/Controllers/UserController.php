<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index')
            ->with(['users' => $users]);
    }

    public function quiz()
    {
        $quizzes = Quiz::all();

        return view('user.quiz')
            ->with(['quizzes' => $quizzes]);
    }

    public function q_show($q_id)
    {
        $quiz = Quiz::find($q_id);
        $questions = Question::where('quiz_id', $q_id)->get();
        foreach ($questions as $question) {
            // dd($question->id);
            $question->choices = Choice::where('question_id', $question->id)->get();
        }
        // $choices = Choice::where('quiz_id', $q_id)->get();
        // dd($questions);


        // return view('user.q_show')
        //     ->with(['questions' => $questions]);
        return view('user.q_show', compact('quiz' , 'questions'));
    }
}