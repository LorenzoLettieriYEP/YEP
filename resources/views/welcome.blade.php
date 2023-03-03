<x-layout>
    <x-navbar></x-navbar>
    @if (session("message"))
    <div class="alert alert-success mt-5">
        {{session('message')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dai un'occhiata ai nostri ultimi articoli</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($lastArticles as $article)
                <div class="col-12 col-md-3 my-5">
                    <div class="card h-100">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top img-card" alt="...">
                        <div class="card-body d-flex flex-column justify-content-evenly">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <h6 class="card-title">{{$article->subtitle}}</h6>
                          <a href="{{route("showArticle", compact("article"))}}" class="btn btn-primary">Leggi Articolo</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>Lavora con noi
                </h2>
                <a type="button" class="btn btn-success" href="{{route("career")}}">Candidati Ora</a>
            </div>
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/1000" alt="" class="w-100 h-50">
            </div>
        </div>
    </div>
</x-layout>