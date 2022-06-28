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
            return redirect('/');

        else
            return view("login");
    }

    public function postLogin(Request $req)
    {
        $user = User::where("username", $req->username)->where("password",md5($req->password))->get();
        $user = $user->toArray();

        if (count($user) > 0){
            session($user);
            $req->session()->put("status","logged-in");
            return redirect()->back();
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

        $encrypted = md5($req->password);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->password = $encrypted;
        $user->profpic = 'default.jpeg';
        $user->save();

        $req->session()->flash("message","Sign up sucessful, please log in");

        return redirect("/login");
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        $req->session()->flash("message","You are logged out");
        return redirect("/");

    }

    public function index(Request $req){
        $data = $req->session()->all();
        if(isset($data["status"]) && $data['status'] == "logged-in")
            if($data['0']['username'] == "admin")
                return redirect()->route('dashboard');
            else
                return redirect()->route('landing');
        else
            return redirect()->route('landing');
    }

    public function landing(Request $req){
        $data = $req->session()->all();
        $article = Article::orderByDesc('id')->take(3)->get();
        $forum = Forum::orderByDesc('id')->take(4)->get();
        $video = Videos::orderByDesc('id')->take(2)->get();
        $glos = Glosarium::orderByDesc('id')->take(1)->get();
        $donation = Donation::all();


        return view('landing' , ['data'=>$data , 'article'=>$article , 'forum'=>$forum , 'video'=>$video , 'glos'=>$glos , 'donation'=>$donation]);
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
   public function aboutus(Request $req){
        $data = $req->session()->all();
        $fill = Aboutus::where('id' , 1)->get();
        
        return view('aboutus' , ['data' => $data,'fill'=>$fill]);

    }
    
    public function aboutusUpdate(Request $request , $id){
        $data = Aboutus::find($id);
        $data->isi = $request->isi;
        $data->update();

        return redirect()->route('aboutus');
    }

    public function search(Request $req){
        $data = $req->session()->all();
        $value = $req->search;
        $article = Article::orderByDesc('id')->where('title' , 'LIKE' , "%$value%")->get();
        $forum = Forum::orderByDesc('id')->where('title' , 'LIKE' , "%$value%")->get();
        $video = Videos::orderByDesc('id')->where('title' , 'LIKE' , "%$value%")->get();
        $glos = Glosarium::orderByDesc('id')->where('title' , 'LIKE' , "%$value%")->get();
        $donation = Donation::all();


        return view('searchresult' , ['data'=>$data , 'value'=>$value, 'article'=>$article , 'forum'=>$forum , 'video'=>$video , 'glos'=>$glos , 'donation'=>$donation]);
    }

    public function profile(Request $req){
        $data = $req->session()->all();
        $profile = User::find($data[0]['id']);

        return view('profile' , ['profile'=>$profile, 'data'=>$data]);
    }


    public function profileEdit(Request $req){
        $data = $req->session()->all();
        $profile = User::find($data[0]['id']);

        return view('profileEdit' , ['profile'=>$profile, 'data'=>$data]);
    }

    public function setCookie(Request $request){
        $minutes = 999;
        $value = $request->v;
        $response = new Response('Set Cookie');
        $response->cookie('theme', $value, $minutes);
        return redirect()->back()->withCookie('theme', $value, $minutes);
     }

     public function getCookie(Request $request){
        $value = $request->cookie('theme');
        echo $value;
     }
}