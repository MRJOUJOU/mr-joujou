@extends('layout.client')
@section('content')
    <div class="container mb-5 mt-5">
<a href="{{ route('client.article') }}">Retour</a>
    <h1>Details des articles</h1>
    </div>
    <h2>
        {{ $articles->titre }}
    </h2>
    <p>
        {{ $articles->description }}
    </p>
    <div class="row">
        @foreach ($articles->categories as $categorie)
            @include('client._composants.categorie', [
                'categorie' => $categorie,
            ])
        @endforeach
    </div>
@endsection
