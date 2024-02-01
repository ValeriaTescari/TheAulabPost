<x-layout>
    <x-header title="Lavora con noi" />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-3">
                <h2>Lavora come Amministratore</h2>
                <p>Cosa farai: dirigerai e organizerai, in maniera responsabile, le decisioni verso la società</p>

                <h2>Lavora come Revisore</h2>
                <p>Cosa farai: valuterai se l'argomento trattato nell'articolo è idoneo per il nostro giornale</p>

                <h2>Lavora come Redattore</h2>
                <p>Cosa farai: scriverai articoli di vari argomenti </p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="customCarrers p-5" action="{{ route('careers.submit') }}" method="POST">
                    @csrf
                    <div class=" md-3 mt-2">
                        <label class="form-label fs-4"><span>*</span>Per quale ruolo ti stai candidando</label>
                        <select name="role" class="form-control">
                            <option value="">Segli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="md-3 mt-4">
                        <label class="form-label fs-4"><span>*</span>Email</label>
                        <input name="email" type="email" class="form-control" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="md-3 mt-4">
                        <label class="form-label fs-4"><span>*</span>Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-5">
                        <button class="btn">Invia la candidatura</button>
                    </div>
                    <legend class="text text-start mt-5 form-label "><span>*</span>campo obbligatorio</legend>
                </form>


            </div>
        </div>
    </div>

</x-layout>
