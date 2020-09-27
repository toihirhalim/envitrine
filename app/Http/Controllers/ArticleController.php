<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\Facades\Image;
use App\Cathegorie;
use SebastianBergmann\Environment\Console;

class ArticleController extends Controller
{
    public function create(){
        return view('backend.createArticle');
    }

    public function edit(Article $article){
        return view('backend.editArticle', [
            'article' => $article,
        ]);
    }

    public function update(Article $article){
        $cath = request('cathegorie_id');
        $cathegorie = Cathegorie::wherecathegorie($cath)->first();
        if($cathegorie == null){
            $data = [ 'cathegorie' => $cath];
            Cathegorie::create($data);
            $cathegorie = Cathegorie::wherecathegorie($cath)->first();
        }
        $data = request()->validate([
            'libele' => 'required',
            'pu' => 'required',
            'description' => '',
            'cathegorie_id'=>'required',
            'image'=>'',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('uploads', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();
            $imageArray = ['image'=> $imagePath];
        }
        
        $article->update(array_merge(
            $data,
            ['cathegorie_id'=>$cathegorie->id],
            $imageArray ?? []
        ));

        return redirect('/backend/article/'.$article->id);
        
    }

    public function store(){

        $cath = request('cathegorie_id');
        $cathegorie = Cathegorie::wherecathegorie($cath)->first();
        if($cathegorie == null){
            $data = [ 'cathegorie' => $cath];
            Cathegorie::create($data);
            $cathegorie = Cathegorie::wherecathegorie($cath)->first();
        }

        $data = request()->validate([
            'libele' => 'required',
            'pu' => 'required',
            'description' => '',
            'cathegorie_id'=>'required',
            'image'=>['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
       
        
        Article::create([
            'libele'=> $data['libele'],
            'pu'=> $data['pu'],
            'description'=> $data['description'],
            'cathegorie_id'=> $cathegorie->id,
            'image'=> $imagePath,
        ]);

        return redirect('/backend/');
    }

    public function delete(Article $article){
        $article->delete();
        return redirect('/backend/');
    }

}
