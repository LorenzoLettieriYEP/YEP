<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ecco tutti gli articoli</h1>
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
                          <a href="#" class="btn btn-primary">Leggi Articolo</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>