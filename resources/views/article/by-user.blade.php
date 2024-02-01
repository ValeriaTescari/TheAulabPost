<x-layout>
    <x-header title="{{ $user->name }}" />

    <div class="container my-5 mx-auto">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card cardCustom hover2 img hover2 img:hover">
                        <a href="{{ route('article.show', compact('article')) }}"><img src="{{ Storage::url($article->image) }}" class="dettImg card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ substr($article->title, 0, 20) }} ...</h5>
                            <p class="card-text">{{ substr($article->subtitle, 0, 25) }} ... </p>
                            @if ($article->category)
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                            @endif
                            <p class="small fst-italic text-capitalize">
                        </div>
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                        </p>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center"> Redatto il {{ $article->created_at->format('d/m/Y') }}
                            <a href="{{ route('article.show', compact('article')) }}" class="ms-2 btn btn-info button">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
