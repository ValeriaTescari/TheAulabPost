<x-layout>

    <div class="container-fluid">
        <div class="row bg-header align-items-center">
            <div class="imgMod col-12 text-center py-5">
                <h1 class="display-1 fw-bold text-title">{{ $article->title ?? 'Gianni' }} </h1>
            </div>
        </div>
    </div>

    <div class="container my-5 dettCustom">
        <div class="row display-flex align-items-center justify-content-around">
            <div class="col-md-4 customC hover1 img hover1 img:hover ">
                <img src="{{ Storage::url($article->image) }}" class="dettImg img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h3 class="card-text">{{ $article->subtitle }}</h3>
                    <div class="card-footer text-muted align-items-center"> Redatto il
                        {{ $article->created_at->format('d/m/Y') }} da <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}" class="small text-muted fst-italic text-capitalize me-2">{{ $article->user->name }}</a>
                    </div>
                    @if ($article->category)
                        <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                    @else
                        <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                    @endif
                    <p class="small fst-italic text-capitalize">
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                    </p>
                    <hr>
                    <p class="text-center">{{ $article->body }}</p>
                    <div class="text-center">
                        @if (Auth::user() && Auth::user()->is_revisor)
                            @if ($article->is_accepted == null)
                                <a href="{{ route('revisor.acceptedArticle', compact('article')) }}" class="btn buttonAcc my-5" title="Accetta"><i class="fa-solid fa-check"></i></a>
                                <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn danger my-5" title="Rifiuta"><i class="fa-solid fa-ban"></i></a>
                            @elseif($article->is_accepted == true)
                                <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn danger my-5" title="Rifiuta"><i class="fa-solid fa-ban"></i></a>
                            @elseif($article->is_accepted == false)
                                <a href="{{ route('revisor.acceptedArticle', compact('article')) }}" class="btn btn-success my-5" title="Accetta"><i class="fa-solid fa-check"></i></a>
                            @endif
                        @endif
                        <a class="btn buttonNeg my-5 " title="Torna Indietro" href="{{ route('article.index') }}"><i class="fa-solid fa-backward"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
