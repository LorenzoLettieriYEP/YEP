<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Articoli caricati da: {{$user->name}}</h1>
                <h4 class="text-center">Questo utente ha caricato {{$count}} articoli</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-3">
                    <div class="card">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <h6 class="card-title">{{$article->subtitle}}</h6>
                          <a href="{{route("showArticle", compact("article"))}}" class="btn btn-primary">Leggi Articolo</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>