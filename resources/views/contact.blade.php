<x-layout>
    <x-header title="Scrivi alla Redazione" />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-3 text">
                <h3>Questa sezione ti permette di comunicare con le redazioni di The Aulab Post, contattare gli uffici e richiedere informazioni su servizi, abbonamenti, arretrati e prodotti collaterali.</h3>
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
                <form class="customCarrers p-5" action="{{ route('contacts.submit') }}" method="POST">
                    @csrf
                    <div class="md-3 mt-4">
                        <label class="form-label fs-4">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="md-3 mt-4">
                        <label class="form-label fs-4">Usa questo spazio esclusivamente per inviare suggerimenti, segnalazioni e porre domande sui contenuti pubblicati dalla redazione da te selezionata del The Aulab Post.</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="mt-5">
                        <button class="btn">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
