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

    public function videoAdd(Request $request){
        $video = new Videos();
        $video->title = $request->title;
        $video->description = $request->description;


        $file = $request->file('filevideo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'filevideo';
        $file->move($tujuan_upload,$nama_file);
        $video->asset = $nama_file;

        $file = $request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'thumbnail';
        $file->move($tujuan_upload,$nama_file);
        $video->thumbnail = $nama_file;

        $video->save();

        return redirect()->back();
    }

    public function videoEdit($id , Request $request){
        $video = Videos::find($id);
        $video->title = $request->title;
        $video->description = $request->description;

        if ($request->filevideo != null){
            $file = $request->file('filevideo');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'filevideo';
            $file->move($tujuan_upload,$nama_file);
            $video->asset = $nama_file;
        }

        if ($request->thumbnail != null) {
            $file = $request->file('thumbnail');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'thumbnail';
            $file->move($tujuan_upload, $nama_file);
            $video->thumbnail = $nama_file;
        }

        $video->update();

        return redirect()->back();
    }

    public function videoDelete($id){
        $video = Videos::find($id);
        $video->delete();
        return redirect()->back();
    }
}