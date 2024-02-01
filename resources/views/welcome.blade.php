<x-layout>
    <x-header title="The Aulab Post" />
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 mt-5">
                    <div class="card cardCustom img:hover">
                        <a href="{{ route('article.show', compact('article')) }}"><img src="{{ Storage::url($article->image) }}" class="dettImg img-fluid card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ substr($article->title, 0, 20) }} ...</h5>
                            <p class="card-text">{{ substr($article->subtitle, 0, 25) }} ... </p>
                            @if ($article->category)
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                            @endif
                            <span class="small text-muted fst-italic">- Tempo di lettura
                                {{ $article->readDuration() }}min</span>
                            <hr>
                            <p class="small fst-italic text-capitalize">
                        </div>
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                        </p>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center"> Redatto il {{ $article->created_at->format('d/m/Y') }} da <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}" class="ms-1 small text-muted fst-italic text-capitalize me-2">{{ $article->user->name }}</a>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info button">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
