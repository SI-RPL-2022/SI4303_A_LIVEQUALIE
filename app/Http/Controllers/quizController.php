<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quizIndex(Request $req){
        $data = $req->session()->all();
        $question = Question::all();
        $answer = Answer::all();

        return view('quiz' , ['data' => $data , 'question' => $question , 'answer'=>$answer]);

    }

    public function quizResult(Request $request){
        $tess = $request->session()->all();
        $data = $request->except('_token' , '_method');
        $test = Question::all();
        $total = 0 ;
        foreach ($data as $x){
            $total += (int)$x;
        }

        $nilai = $total / count($test) * 100 ;

        return view('quizResult' , ['data'=>$tess , 'total' => $nilai]);

    }
}