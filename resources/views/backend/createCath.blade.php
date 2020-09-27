@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/backend/cathegorie')}}" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Cathegorie</h1>
                </div>
                <div class="form-group row">
                    <label for="cathegorie" class="col-md-4 col-form-label ">Cathegorie</label>

                    <input id="cathegorie" type="cathegorie" class="form-control @error('cathegorie') is-invalid @enderror" name="cathegorie" value="{{ old('cathegorie') }}" required autocomplete="cathegorie">

                    @error('cathegorie')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Cathegorie</button>
                </div>
            </div>
        </div>  
    </form>
</div>
@endsection