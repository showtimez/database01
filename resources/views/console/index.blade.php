<x-layout>
<x-header header="Tutte le console inserite"></x-header>
<nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
    <div class="container-fluid">
    </div>
</nav>
@if(session('consoleCreated'))
<div class="alert alert-success">
    {{ session('consoleCreated') }}
</div>
@endif
@if(session('consoleUpdated'))
<div class="alert alert-success">
    {{ session('consoleUpdated') }}
</div>
@endif
@if(session('consoleDeleted'))
<div class="alert alert-success">
    {{ session('consoleDeleted') }}
</div>
@endif



<div class="container my-5">
    <div class="row justify-content-center">

        @if (count($consoles))
        @foreach ($consoles as $console)
            <div class="col-12 col-md-4 my-3">
                <div class="card customCard shadow" >
                    <div class="justify-content-center py-3">
                        <img src="{{ Storage::url($console->logo) }}" class="gameImg" alt="...">
                    </div>
                    <div class="card-body shadow ">
                        <h5 class="card-title">{{ $console->name }}</h5>
                        <p class="small fst-italic text-muted">{{ $console->brand }}</p>


                        <hr>
                        <p class="small">Creato da: {{ $console->user_id ? $console->user->name : 'Utente Guest' }}</p>
                        <hr>


                        <div class="mt-3 d-inline">
                            <a href="{{ route('console.show', compact('console')) }}" class="btn btn-primary">Scopri di più</a>

                            @if ($console->user_id && $console->user->id == Auth::user()->id)
                            <a href="{{ route('console.edit', compact('console')) }}" class="btn btn-primary">Modifica console</a>
                            <form action="{{ route('console.destroy', compact('console'))}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" btn btn-danger>Cancella</button>
                            </form>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
            <div class="col-12 text-center">
                <h2>Non sono state inserite console.</h2>
            </div>
        @endif
    </div>
</div>







</x-layout>
