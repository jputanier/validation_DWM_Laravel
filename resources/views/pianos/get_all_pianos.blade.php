@extends('layouts.template')

@section('content')
<h1>Nos pianos</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Marque</th>
      <th scope="col">Longueur(cm)</th>
      <th scope="col">Poids(Kg)</th>
      @auth
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      @endauth
    </tr>
  </thead>
  <tbody>
    @foreach ($pianos as $piano)
        <tr>
            <td>{{ $piano->brand }}</td>
            <td>{{ $piano->length }}</td>
            <td>{{ $piano->weight }}</td>
            @auth
              <td><a href="{{ route('edit', $piano->id) }}"><button class="btn btn-primary">Modifier</button></a></td>
              <td class="td_form">
                <form action="{{ route('delete', $piano->id) }}" method="POST" class="form_delete">
                  @csrf
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
              </td>
            @endauth
        </tr>
    @endforeach
  </tbody>
</table>
@endsection