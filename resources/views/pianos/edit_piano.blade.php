@extends('layouts.template')

@section('content')
<h1>Vous êtes sur la page de modification de caractéristiques</h1>
<form method="POST" action="{{ route('update', $piano->id) }}">

    @csrf
    <div class="form-group">
        <label for="brand">Marque</label>
        <input type="text" class="form-control" id="brand" name="brand" aria-describedby="emailHelp" placeholder="{{ $piano->brand }}" value="{{ $piano->brand }}">
    </div>
    <div class="form-group">
        <label for="length">Longueur</label>
        <input type="number" min="0" class="form-control" id="length" name="length" placeholder="{{ $piano->length }}" value="{{ $piano->length }}">
    </div>
  
    <div class="form-group">
        <label for="weight">Poids</label>
        <input type="number" min="0" class="form-control" id="weight" name="weight" placeholder="{{ $piano->weight }}" value="{{ $piano->weight }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection