@forelse ($requests as $request)
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Creato Il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>

            <tr>
                <th scope="row">{{$request->id}}</th>
                <td>{{$request->name}}</td>
                <td>{{$request->email}}</td>
                <td>{{$request->created_at}}</td>
                <td>
                    @switch($role)
                        @case("Revisore")
                        <a href="{{route("setRevisor", compact("request"))}}" type="button" class="btn btn-outline-success">Accetta</a>
                        <a href="{{route("denyRevisor", compact("request"))}}" type="button" class="btn btn-outline-danger">Rifiuta</a>
                            @break
                        @case("Scrittore")
                        <a href="{{route("setWriter", compact("request"))}}" type="button" class="btn btn-outline-success">Accetta</a>
                        <a href="{{route("denyWriter", compact("request"))}}" type="button" class="btn btn-outline-danger">Rifiuta</a>
                            @break
                        @case("Admin")
                        <a href="{{route("setAdmin", compact("request"))}}" type="button" class="btn btn-outline-success">Accetta</a>
                        <a href="{{route("denyAdmin", compact("request"))}}" type="button" class="btn btn-outline-danger">Rifiuta</a>
                            @break
                        
                            
                    @endswitch
                    
                </td>
            </tr>


    </tbody>
</table>
@empty
    <h3>Non ci sono richieste per il ruolo: {{$role}}</h3>
@endforelse