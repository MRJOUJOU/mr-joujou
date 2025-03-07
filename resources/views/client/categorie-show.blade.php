@extends('layout.client')
@section('content')
    <div class="container mb-5 mt-5">
<a href="{{ route('client.categorie') }}">Retour</a>
    <h1>Details de la categorie</h1>
    </div>
    <h2>
        {{ $categorie->titre }}
    </h2>
    <p>
        {{ $categorie->description }}
    </p>
    <div class="row">
        @foreach ($categorie->articles as $article)
            @include('client._composants.article', [
                'article' => $article,
            ])
        @endforeach
    </div>
@endsection
