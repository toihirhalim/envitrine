@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/backend/edit/'.$article->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="libele" class="col-md-4 col-form-label ">Libele</label>

                    <input id="libele" type="libele" class="form-control @error('libele') is-invalid @enderror" name="libele" value="{{ old('libele') ?? $article->libele }}" required autocomplete="libele">

                    @error('libele')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="pu" class="col-md-4 col-form-label ">Prix Unitaire</label>

                    <input id="pu" type="pu" class="form-control @error('pu') is-invalid @enderror" name="pu" value="{{ old('pu') ?? $article->pu }}" required autocomplete="pu">

                    @error('pu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="cathegorie_id" class="col-md-4 col-form-label ">Cathegorie</label>

                    <input id="cathegorie_id" type="cathegorie_id" class="form-control @error('cathegorie_id') is-invalid @enderror" name="cathegorie_id" value="{{ old('cathegorie_id') ?? $article->cathegorie->cathegorie}}" required autocomplete="cathegorie_id">

                    @error('cathegorie_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>

                    <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $article->description}}" required autocomplete="description">

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @if($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                    
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Article</button>
                </div>
            </div>
        </div>  
    </form>
</div>
@endsection