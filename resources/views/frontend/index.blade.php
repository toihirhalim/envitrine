@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row ">
        <div class="links d-flex">
        @foreach($cathegories as $cathegorie)
            <div class="col-4 ">
                <a href=" {{ url('/cathegorie/'.$cathegorie->id) }} "> {{$cathegorie->cathegorie}} </a>
            </div> 
            @endforeach
        </div>
    </div>
    <br>!!! cliquer sur un article pour voir en detail !!! <br>
    <div class="row pt-8">
            @foreach($articles as $article)
            <div class="col-2 pt-4">
                <a href=" {{ url('/article/'.$article->id) }} ">
                    <img src="{{ url('/storage/'. $article->image ) }}" class="w-100" >
                </a>
                <a href=" {{ url('/article/'.$article->id) }} ">{{$article->libele}} <strong>{{$article->pu}}</strong> Dh</a>
            </div> 
            @endforeach
    </div>
    <br>
    <div >
        {{ $articles->links()}}
    </div>
    
</div>
@endsection