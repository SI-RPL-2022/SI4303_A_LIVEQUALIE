<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class videosController extends Controller
{
    public function videoIndex(Request $req){
        $data = $req->session()->all();
        $video = Videos::all();
        return view('videoIndex' ,['data'=>$data , 'video'=>$video]);
    }

    public function videoDetail($id,Request $req){
        $data = $req->session()->all();
        $video = Videos::find($id);
        $rec = Videos::all()->random(3)->shuffle();
        return view('videoDetail' ,['data'=>$data , 'video'=>$video ,'rec'=>$rec]);
    }
}