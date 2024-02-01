<footer class="mt-5 bg-body-tertiary text-center text-lg-start" style="background-color: rgba(49, 49, 49, 50%);">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="{{ route('article.index') }}" class="nav-link px-2 text-muted">Articoli</a></li>
        <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link px-2 text-muted">Contattaci</a></li>
        {{-- <li class="nav-item"><a href="{{route('chiSiamo')}}" class="nav-link px-2 text-muted">Chi Siamo</a></li> --}}
    </ul>
    <!-- Copyright -->
    <div class="text-center p-3">
        © 2024 Copyright:
        <a class="text-body" href="{{ route('homepage') }}">The Aulab Post</a>
    </div>
    <!-- Copyright -->
</footer>