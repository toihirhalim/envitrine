<?php

namespace App\Http\Controllers;

use App\Cathegorie;
use App\Article;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $cathegories = Cathegorie::all();
        $articles = Article::paginate(12);
        return view('frontend.index',[
            'cathegories'=> $cathegories,
            'articles'=>$articles,
        ]);
    }

    public function showArticle(\App\Article $article){
        return view('frontend.show',compact('article')); 
    }
    
    public function indexCathegorie( $cathegorie){

        $cathegories = Cathegorie::all();
        $catg = Cathegorie::findOrFail($cathegorie);
        $articles = $catg->articles()->paginate(12);

        return view('frontend.index',[
            'cathegories'=> $cathegories,
            'articles'=>$articles,
        ]); 
    }
}
