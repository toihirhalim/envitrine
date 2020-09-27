@extends('layouts.app')

@section('content')
<div class="container">
    <div>
    <a href=" {{ url('/cathegorie/'.$article->cathegorie->id) }}">Back to {{ $article->cathegorie->cathegorie }}</a>
    </div>
    <div class="row pt-5">
        <div class="col-5">
            <img src="{{ url('/storage/'. $article->image ) }}" class="w-100" >
        </div>
        <div class="col-4">
            <div>
                <h3><strong>{{ $article->libele }}</strong></h3>
                <h4>Prix: <strong>{{ $article->pu }}</strong> Dh</h4>
                Description:
                <p>{{ $article->description }}</p>
            </div>
            <div >
                <button>Acheter</button>
            </div>
        </div>
    </div>
</div>
@endsection