<x-layout>

    <x-header title="Inserisci il tuo Articolo" />
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
            <div class="col-12 col-md-8">
                <form class="card p-5 shadow" method="POST" action="{{ route('article.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Titolo:</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Sottotitolo:</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Immagine:</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria:</label>
                        <select id="swipe" name="category" class="form-control text-capitalize"
                            onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                            @foreach ($categories as $category)
                                <option class="selettore" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label"><span>*</span>Tags:</label>
                        <input name="tags" class="form-control" value="{{ old('tags') }}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fs-4"><span>*</span>Corpo del Testo:</label>
                        <textarea name="body" cols="30" rows="7" class="form-control">{{ old('body') }}</textarea>
                    </div>
                    <div class="mt-2 ">
                        <button class="btn" type="submit">Pubblica Articolo</button>
                        <a title="Home" class="btn buttonNeg" href="{{ route('homepage') }}"><i class="fa-solid fa-house"></i></a>
                    </div>
                    <legend class="text mt-5 form-label"><span>*</span>campo obbligatorio</legend>
                </form>
            </div>
        </div>
    </div>

</x-layout>
