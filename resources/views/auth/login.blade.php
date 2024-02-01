<x-layout>

    <x-header title="Accedi" />

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
            <div class="col-8 ">
                <form class="card p-5 shadow" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>User Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><span>*</span>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Accedi</button>
                    <legend class="text mt-5 form-label"><span>*</span>campo obbligatorio</legend>
                </form>
            </div>
        </div>
    </div>

</x-layout>
