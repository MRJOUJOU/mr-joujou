@extends('layout.client')
@section('content')
    <div class="container mb-5 mt-5">
        <h2 class="mb-5">Liste des articles</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach (range(1, 6) as $article)
                @include('client._composants.article',[
                    'article'=> $article
                ])
            @endforeach
        </div>

    </div>
@endsection
