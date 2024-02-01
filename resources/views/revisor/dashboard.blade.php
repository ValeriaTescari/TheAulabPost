<x-layout>
    <x-header title="Revisore" />

    @if (session('massage'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli da Revisionare</h2>
                <x-articles-table :articles='$unrevisioneRequests' />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli Pubblicati</h2>
                <x-articles-table :articles='$acceptedArticles' />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli Respinti</h2>
                <x-articles-table :articles='$rejectedArticles' />
            </div>
        </div>
    </div>

</x-layout>
