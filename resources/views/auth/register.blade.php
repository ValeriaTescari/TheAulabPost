<x-layout>
    <x-header title="Registrati" />

    @if ($errors->any())
        <div class="alert alert-danger text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 text">
                <form class="card p-5 shadow" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>User Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>User Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Registrati</button>
                    <legend class="text mt-5 form-label"><span>*</span>campo obbligatorio</legend>
                </form>
            </div>
        </div>
    </div>

</x-layout>
