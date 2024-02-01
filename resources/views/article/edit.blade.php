<x-layout>

    <x-header title="Modifica un Articolo" />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <form class="card p-5 shadow" method="POST" action="{{ route('article.update', compact('article')) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Titolo:</label>
                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo:</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $article->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine:</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria:</label>
                        <select name="category" class="form-control text-capitalize">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"@if ($article->category && $category->id == $article->category->id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Corpo del Testo:</label>
                        <textarea name="body" cols="30" rows="7" class="form-control">{{ $article->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tags:</label>
                        <input name="tags" class="form-control" value="{{ $article->tags->implode('name', ', ') }}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <div class="mt-2">
                        <button class="btn" type="submit">Inserisci un Articolo</button>
                        <a class="btn buttonNeg" href="{{ route('homepage') }}"><i class="fa-solid fa-house"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
