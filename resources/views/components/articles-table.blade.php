<div class="table-responsive">
    <table class="table table-striped table-hover shadow border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Redattore</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>
                        @if (is_null($article->is_accepted))
                            <a href="{{ route('article.show', compact('article')) }}" class="btn button">Leggi</a>
                        @else
                            <a href="{{ route('revisor.undoArticle', compact('article')) }}" class="btn buttonNeg" title="Revisiona"><i class="fa-solid fa-pen"></i></a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
