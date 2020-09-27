@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a href=" {{ url('/backend/cathegorie/'.$article->cathegorie->id) }} ">Back to {{ $article->cathegorie->cathegorie }}</a>
    </div>
    <div class="row pt-5">
        <div class="col-5">
            <img src="{{ url('/storage/'. $article->image ) }}" class="w-100" >
        </div>
        <div class="col-4">
            <div>
                <h3><strong>{{ $article->libele }}</strong></h3>
                <h4>Prix: <strong>{{ $article->pu }}</strong> Dh</h4>
                <h5>description:</h5>
                <p>{{ $article->description }}</p>
            </div>
            <div class="d-flex pt-100 justify-content-between">
                <a href="{{ url('backend/article/'.$article->id.'/edit') }}">Edit Article</a>
                <a href="{{ url('backend/article/'.$article->id.'/delete') }}">Delete Article</a>
            </div>
        </div>
    </div>
</div>
@endsection