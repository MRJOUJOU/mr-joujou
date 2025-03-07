@extends('layout.client')
@section('content')
    <div class="container mb-5 mt-5">
        <h2 class="mb-5">Liste des categories</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($categories as $categories)
                @include('client._composants.categorie',[
                    'categorie'=> $categories
                ])
            @endforeach
        </div>

    </div>
@endsection
