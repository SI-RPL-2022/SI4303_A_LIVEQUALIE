<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function indexArtikel(Request $req){
        $data = $req->session()->all();
        $artikel = Article::all();
        return view('artikelIndex' ,['data'=>$data , 'artikel' =>$artikel]);
    }

    public function indexallArtikel(Request $req){
        $data = $req->session()->all();
        $artikel = Article::all();
        return view('artikelAll' ,['data'=>$data , 'artikel' =>$artikel]);
    }

    public function detailArtikel($id , Request $req){
        $data = $req->session()->all();
        $artikel = Article::find($id);
        $artikel->view += 1;
        $artikel->update();
        return view('artikelDetail' ,['data'=>$data , 'artikel' =>$artikel]);
    }
    
    public function deleteArtikel($id){
        $artikel = Article::find($id);
        $artikel->delete();
        return redirect(route('artikel.index'))->with('berhasil' , 'artikel berhasil di delete');
    }

    public function createArtikel(Request $req){
        $data = $req->session()->all();
        return view('artikelAdd', ['data'=>$data]);
    }
    public function postcreateArtikel(Request $request){
        $data = new Article();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->author = 'james bond';
        $data->view = 0;

        $file = $request->file('picture');

        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'artikelimage';
        $file->move($tujuan_upload,$nama_file);

        $data->picture = $nama_file;

        $data->save();
        return redirect(route('artikel.index'))->with('berhasil' , 'artikel berhasil di buat');
    }

    public function editArtikel($id, Request $req){
        $data = $req->session()->all();
        $artikel = Article::find($id);
        return view('artikelEdit' , ['data'=>$data , 'artikel' =>$artikel]);
    }

    public function posteditArtikel($id , Request $request){
        $data = Article::find($id);
        $data->description = $request->description;
        $data->content = $request->content;
        $data->author = 'james bond';
        $data->view = $data->view;

        if ($request->picture != null){
            $file = $request->file('picture');

            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'artikelimage';
            $file->move($tujuan_upload,$nama_file);

            $data->picture = $nama_file;
        }
        $data->update();
        return redirect(route('artikel.index'))->with('berhasil' , 'artikel berhasil di buat');
    }
}