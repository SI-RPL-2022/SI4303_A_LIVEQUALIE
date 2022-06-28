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