<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Article</text>
        </svg>
        <div class="card-body">
            <h3>{{ $article->titre }}</h3>
            <p class="card-text">{{ $article->resume }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('client.article.details', [
                        'slug' => $article->slug,
                    ]) }}"
                        type="button" class="btn btn-sm btn-outline-secondary">Voir plus</a>

                </div>
                <small class="text-body-secondary">9 minute</small>
            </div>
        </div>
    </div>
</div>
