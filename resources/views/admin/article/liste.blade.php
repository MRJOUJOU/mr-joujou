@extends('layout.admin')
@section('content')
<div class="container">

    <h1 style="text-align: center, mb-5, mt-5">Liste des articles</h1>
    <table class="table  w-100 table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th  style="width: 20rem" >Categorie</th>
                <th style="width: 5rem">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->titre }}</td>
                    <td class="text-nowrap">{{ $article->categorie?->titre }}</td>
                    <td class="text-nowrap">
                        <button>Modifier</button>
                        <button>Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
