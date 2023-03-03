<x-layout>
    <x-navbar></x-navbar>
    @if(session("message"))
    <div class="alert alert-success mt-5">
        {{session('message')}}
    </div>
    @endif
    <h1>Benvenuto nella tua zona Admin</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-requestTable
                 :requests="$writerReq"
                 role="Scrittore"
                />
                <x-requestTable
                 :requests="$revisorReq"
                 role="Revisore"
                />
                <x-requestTable
                 :requests="$adminReq"
                 role="Admin"
                />
                
            </div>
        </div>
    </div>
</x-layout>