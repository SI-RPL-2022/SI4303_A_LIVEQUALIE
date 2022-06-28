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

    public function quizAdd(Request $request){
        $question = new Question();
        $question->title = $request->title;
        $question->save();

        $benar = new Answer();
        $benar->question_id = $question->id;
        $benar->choices = $request->benar;
        $benar->is_correct = 1;
        $benar->save();

        $salah1 = new Answer();
        $salah1->question_id = $question->id;
        $salah1->choices = $request->salah1;
        $salah1->is_correct = 0;
        $salah1->save();

        if ($request->salah2 != null){
            $salah2 = new Answer();
            $salah2->question_id = $question->id;
            $salah2->choices = $request->salah2;
            $salah2->is_correct = 0;
            $salah2->save();
        }
    }
}