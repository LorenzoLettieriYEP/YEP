<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-6">
                <h1 class="text-center">This is a Login Page</h1>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 d-flex justify-content-center">
                <form class="w-100" action="{{route("login")}}" method="POST">
                    @csrf
                    <input class="form-control my-3" type="email" placeholder="Username" name="email">
                    <input class="form-control my-3" type="password" placeholder="Password" name="password">
                    <button class="btn btn-dark  my-3" type="submit">Accedi!!</button>
                </form>
            </div>
        </div>
        
    </div>
</x-layout>