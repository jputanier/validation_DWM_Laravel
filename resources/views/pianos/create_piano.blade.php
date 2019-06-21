@extends('layouts.template')

@section('content')
<h1>Ajouter votre piano !</h1>
<form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="form-group">
        <label for="brand">Marque</label>
        <input type="text" class="form-control" id="brand" name="brand" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="length">Longueur(cm)</label>
        <input type="number" min="0" class="form-control" id="length" name="length">
    </div>
    <div class="form-group">
        <label for="weight">Poids(Kg)</label>
        <input type="number" min="0" class="form-control" id="weight" name="weight">
    </div>
    
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection


