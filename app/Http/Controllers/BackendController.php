<?php

namespace App\Http\Controllers;

use App\Cathegorie;
use App\Article;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        $cathegories = Cathegorie::all();
        $articles = Article::paginate(12);

        return view('backend.index',[
            'cathegories'=> $cathegories,
            'articles'=>$articles,
        ]);
    }

    public function create(){
        return view('backend.createCath');
    }

    public function showArticle(\App\Article $article){
        return view('backend.show',compact('article')); 
    }
    
    public function indexCathegorie( $cathegorie){

        $cathegories = Cathegorie::all();
        $cathg = Cathegorie::whereid($cathegorie)->first();
        $articles = $cathg->articles()->paginate(12);

        return view('backend.index',[
            'cathegories'=> $cathegories,
            'articles'=>$articles,
        ]); 
    }

    public function store(){
        $data = request()->validate([
            'cathegorie' => 'required',
        ]);

        Cathegorie::create($data);

        return redirect('/backend/');
    }
}
