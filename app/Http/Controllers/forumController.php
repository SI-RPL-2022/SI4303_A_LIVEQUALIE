<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class forumController extends Controller
{
    public function indexForum(Request $req)
    {
        $data = $req->session()->all();
        $user = User::all();
        $forum  = Forum::all();
        $comment = Comment::all();
        $modus = $comment->pluck('forum_id')->mode();
        $hot = $forum->find($modus[0]);
        return view("forumIndex",['data' => $data , 'forum'=>$forum, 'user'=>$user, 'comment'=>$comment, 'hot'=>$hot]);
    }

    public function addForum(Request $req){
        $data = $req->session()->all();
        if(isset($data["status"]) && $data['status'] == "logged-in")
        return view('forumAdd' ,['data'=>$data]);
        else
            return view('login');
    }

    public function postaddForum(Request $req){
        $data = $req->session()->all();
        $forum = new Forum();
        $forum->user_id = $data['0']['id'];
        $forum->title = $req->judul;
        $forum->content = $req->konten;
        $forum->save();
        return redirect(route('forum.index'))->with('berhasil' , 'Berhasil Membuat Forum');
    }

    
    public function detailForum($id , Request $req){
        $data = $req->session()->all();
        $user = User::all();
        $forum = Forum::find($id);
        $comment = Comment::where('forum_id' , $forum->id)->get();
        return view('forumDetail' ,['data'=>$data , 'forum' =>$forum, 'comment'=>$comment]);
    }

    public function addComment($id , Request $req){
        $data = $req->session()->all();
        $forum = new Comment();
        $forum->forum_id = (int)$id;
        $forum->user_id = $data['0']['id'];
        $forum->reply = $req->reply;
        $forum->save();
        return redirect()->back()->with('berhasil' , 'Berhasil Membuat Forum');
    }}