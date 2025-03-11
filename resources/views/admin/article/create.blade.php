@extends('layout.client')
@section('content')

    <div class="container">

        <div class="container mt-5">
            <h2>Formulaire d'ajout</h2>

            @session('success')
                <div class="alert alert-success">
                    {{ $value }}
                </div>
            @endsession
            @dump($errors)
            <form action="{{ route('admin.article.ajouter_traitement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                    @error('titre')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="resume" class="form-label">Resume</label>
                    <textarea class="form-control" id="resume" name="image" rows="4" required></textarea>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="categorie_id" class="form-label">Categorie</label>
                    <select name="categorie_id" id="categorie_id" class="form-control form-select" >
                        <option value=""selected>Selectionnez une categorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <textarea class="form-control" id="tags" name="tags" rows="4" required></textarea>
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
