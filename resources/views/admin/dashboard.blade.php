<x-layout>
    <x-header title="Amministratore" />

    @if (session('massage'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container shadow my-5">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h2>Richieste per il ruolo Amministratore</h2>
                <x-request-table :roleRequests='$adminRequests' role="amministratore" />
            </div>
        </div>
    </div>
    <div class="container shadow my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo Revisore</h2>
                <x-request-table :roleRequests='$revisorRequests' role="revisore" />
            </div>
        </div>
    </div>
    <div class="container shadow my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo Redattore</h2>
                <x-request-table :roleRequests='$writerRequests' role="redattore" />
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I Tags Della Piattaforma</h2>
                <x-metaInfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della Piattaforma</h2>
                <x-metaInfo-table :metaInfos="$categories" metaType="categories" />
                <form class="d-flex" action="{{ route('admin.storeCategory') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova Categoria">
                    <button type="submit" title="Aggiungi" class="btn buttonNeg "><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
