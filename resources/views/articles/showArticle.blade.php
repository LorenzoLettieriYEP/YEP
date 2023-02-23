<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="text-center">{{$article->title}}</h1>
                <h3 class="text-center">{{$article->subtitle}}</h3>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" alt="" class="w-100">
            </div>
            <div class="col-12 col-md-6">
                <h5>Categoria: <a href="{{route("categoryFilter", ["category" => $article->category])}}">{{$article->category->name}}</a></h5>

                <h5>Articolo caricato da: <a href="{{route("userFilter", ["user" => $article->user])}}">{{$article->user->name}}</a></h5>
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div>

</x-layout>