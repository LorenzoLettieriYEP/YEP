<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dai un'occhiata ai nostri ultimi articoli</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($lastArticles as $article)
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