<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Vuoi Lavorare con noi?</h1>
                <h3>Seleziona il ruolo per cui ti vuoi applicare</h3>
            </div>
        </div>
        <div class="row">
            <form action="{{route("writerRequest")}}" method="POST">
                @csrf
                @method("PATCH")
                <button class="btn btn-primary my-3">Scrittore</button>
            </form>

            <form action="{{route("revisorRequest")}}" method="POST">
                @csrf
                @method("PATCH")
                <button class="btn btn-primary my-3">Revisore</button>
            </form>

            <form action="{{route("adminRequest")}}" method="POST">
                @csrf
                @method("PATCH")
                <button class="btn btn-primary my-3">Admin</button>
            </form>
        </div>
    </div>
</x-layout>