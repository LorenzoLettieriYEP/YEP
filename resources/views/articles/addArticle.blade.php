<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Vuoi aggiungere un articolo?</h1>
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
                <form class="w-100" action="{{route("storeArticle")}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input class="form-control my-3" type="text" placeholder="Titolo Articolo" name="title">
                    <input class="form-control my-3" type="text" placeholder="Sottotitolo Articolo" name="subtitle">
                    <select class="form-control my-3" name="categories" id="">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <textarea  class="form-control my-3" name="description" id="" cols="30" rows="10" placeholder="Inserisci il corpo del tuo articolo"></textarea>
                    <input class="form-control my-3" type="file" name="img">
                    <button class="btn btn-dark  my-3" type="submit">Registrati!!</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>