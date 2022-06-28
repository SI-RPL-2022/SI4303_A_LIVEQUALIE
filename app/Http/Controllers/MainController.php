<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;
use App\Models\Forum;
use App\Models\Verification;
use App\Models\Article;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Session;

class MainController extends Controller
{
    public function getLogin(Request $req)
    {   
        if ($req->session()->get("status") == "logged-in")
        {
            return redirect("/forum");
        } 
        
        else

        {   $data = $req->session()->all();
            return view("login",compact("data"));
        }
        
    }

    public function postLogin(Request $req) 
    {
        $user = User::where("username", $req->username)->where("password",md5($req->password))->get();
        $user = $user->toArray();
        
        if (count($user) > 0){
            session($user);
            $req->session()->put("status","logged-in");
            return redirect("/forum");
        } else {
            $req->session()->flash("message","Invalid Username or Password");
            return redirect("/login");
        }
       
    }

    public function getSignup(Request $req) 
    {
        return view("register");
    }

    public function postSignup(Request $req) 
    {   
        // $profpic = time()."-pp.".$req->profpic->extension();
        // $req->profpic->move(public_path('images/upload'),$profpic);

        $encrypted = md5($req->password);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->password = $encrypted;
        $user->profpic = 'a.jpg';
        $user->save();

        $req->session()->flash("message","Sign up sucessful, please log in");

        return redirect("/login");
    }

    public function logout(Request $req) 
    {   
        $req->session()->flush();
        $req->session()->flash("message","You are logged out");
        return redirect("/login");
        
    }

    public function dashboard(Request $req){
        $data = $req->session()->all();
        $forum = count(Forum::all());
        $comment = count(Comment::all());
        $article = count(Article::all());
        $donation = count(Donation::pluck('name')->unique());
        $video = count(Videos::all());
        $glos = count(Glosarium::all());
        $question = count(Question::all());

        $ambil = Article::all();
        $view = 0 ;
        foreach ($ambil as $t){
            $view = $view + $t['view'];
        }

        $cek = Donation::all();
        $total = 0 ;
        foreach ($cek as $t){
            $total = $total + $t['amount'];
        }

        return view('dashboard' , ['data'=>$data , 'article'=>$article, 'view'=>$view , 'forum'=>$forum, 'comment'=>$comment , 'video'=>$video , 'glos'=>$glos , 'donation'=>$donation , 'total'=>$total, 'question'=>$question]);
}
}