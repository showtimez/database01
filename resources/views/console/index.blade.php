<x-layout>
    <x-header header="Tutte le console inserite"></x-header>
    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            @if (count($consoles))


            @foreach ($consoles as $console)
            <div class="col-12 col-md-4 my-3">
                <div class="card customCard shadow" >
                    <div class="justify-content-center py-3">
                        <img src="{{ Storage::url($console->logo) }}" class="card-img-top gameImg" alt="...">
                    </div>
                    <div class="card-body shadow ">
                        <h5 class="card-title">{{ $console->name }}</h5>
                        <p class="small fst-italic text-muted">{{ $console->brand }}</p>
                        <p class="card-text">{{ $console->description }}</p>
                        <a href="{{ route('console.show', compact('console')) }}" class="btn btn-primary">Scopri di più</a>
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
