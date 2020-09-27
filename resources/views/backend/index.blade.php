@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row ">
        @foreach($cathegories as $cath)
            <div class="col-2 ">
                <a href=" {{ url('/backend/cathegorie/'.$cath->id) }} "> {{$cath->cathegorie}} </a>
            </div> 
            @endforeach
    </div>
<br>!!! cliquer sur un article pour modifier ou suprimer !!!<br>
    <div class="row ">
        <div class="links d-flex ">
            <div class="col-8 ">
                <a href="{{ url('backend/article/create') }}"> Add New Article </a>
            </div> 
            <div class="col-8 ">
                <a href="{{ url('backend/cathegorie/create') }}"> Add New Cathegorie </a>
            </div>
        </div>
    </div>
    
    <div class="row pt-8">
            @foreach($articles as $article)
            <div class="col-2 pt-4">
                <a href=" {{ url('/backend/article/'.$article->id) }} ">
                    <img src="{{ url('/storage/'. $article->image ) }}" class="w-100" >
                </a>
                <a href=" {{ url('/backend/article/'.$article->id) }} ">{{$article->libele}} <strong>{{$article->pu}}</strong> Dh</a>
            </div> 
            @endforeach
    </div>
    <br>
    
    <div >
        {{ $articles->links()}}
    </div>
    
</div>
@endsection